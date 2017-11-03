let path = require('path');
let webpack = require('webpack');
let ExtractTextPlugin = require("extract-text-webpack-plugin");
let OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
let ManifestPlugin = require('webpack-manifest-plugin');
let BrowserSyncPlugin = require('browser-sync-webpack-plugin');

require('dotenv').config();

let env = process.env.NODE_ENV ? process.env.NODE_ENV : 'dev';

// outfile name based on enviroment
let outfileName = env == "dev" ? "[name]" : "[name]-[hash]";
let publicPath = env == "dev" ? "http://localhost:8080/" : "/";

// setting up extracttextplugin
let extractStyle = new ExtractTextPlugin({
  filename: outfileName + ".css"
});

// plugins - common
let plugins = [
  new webpack.ProvidePlugin({
    $: "jquery",
    jQuery: "jquery"
  }),
  extractStyle,
  new ManifestPlugin({
    fileName: 'build-manifest.json'
  })
];

// plugin - production
if (env == 'prod') {
  plugins.push(new webpack.optimize.UglifyJsPlugin({
    output: {
      comments: false
    }
  }));
  plugins.push(new OptimizeCssAssetsPlugin({
    assetNameRegExp: /\.css$/g,
    cssProcessor: require('cssnano'),
    cssProcessorOptions: {
      discardComments: {
        removeAll: true
      }
    },
    canPrint: true
  }));
}

// plugin - development
if(env == 'dev'){
  plugins.push(new webpack.HotModuleReplacementPlugin());
  plugins.push(new webpack.NamedModulesPlugin());
  plugins.push(new BrowserSyncPlugin({
    host: 'localhost',
    port: 3000,
    files : ['./**/*.php'],
    proxy: 'http://localhost:8000',
  }, {
    reload : false
  }));
}

// loaders
let styleLoaders = [
  { loader: "css-loader", options : { sourceMap : env == 'dev' } },
  { loader: "postcss-loader", options : { sourceMap : env == 'dev' } },
  { loader: "sass-loader",  options : { sourceMap : env == 'dev' } }
];

module.exports = {
  entry: {
    "app": './resources/assets/index.js',
  },
  output: {
    path: path.resolve(__dirname, 'public/dist'),
    filename: outfileName + ".js",
    publicPath: publicPath
  },
  plugins: plugins,
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: "babel-loader"
      },
      {
        test: /\.css$/,
        use:
          extractStyle.extract({
            use: 'css-loader',
            // use style-loader in development
            fallback: "style-loader"
          })
      },
      {
        test: /\.scss$/,
        use: extractStyle.extract({
          use: styleLoaders,
          // use style-loader in development
          fallback: "style-loader"
        })
      },
      {
        test: /\.(png|gif|jpg)$/,
        use: {
          loader: 'url-loader'
        },
      },
      {
        test: /\.(woff|woff2|eot|ttf|svg)(\?.*$|$)/,
        use: {
          loader: 'file-loader',
        },
      }
    ]
  },
  watch : env == 'dev',
  devtool : env == 'dev' ? 'cheap-module-eval-source-map' : 'cheap-module-source-map',
  devServer : {
    hot : true,
    inline: true,
    port : process.env.WEBPACK_PORT ? process.env.WEBPACK_PORT : 8080,
    contentBase: path.resolve(__dirname, 'public'),
    headers: {
      "Access-Control-Allow-Origin": "*",
      "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
      "Access-Control-Allow-Headers": "X-Requested-With, content-type, Authorization"
    }
  }
}
