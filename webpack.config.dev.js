const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const autoprefixer = require("autoprefixer");

module.exports = {
  mode: "development",
  entry: {
    main: "./assets/js/main.js",
    main: "./assets/scss/main.scss",
  },
  output: {
    filename: "js/[name].js",
    path: __dirname + "/dist",
    assetModuleFilename: "images/[hash][ext][query]",
  },
  module: {
    rules: [
      {
        test: /\.txt$/,
        use: "raw-loader",
      },
      {
        test: /\.sass|scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.png|svg|gif|jpe?g$/,
        type: "asset/resource",
        use: [
          {
            loader: "image-webpack-loader",
            options: {
              outputPath: "/dist/images",
            },
          },
        ],
      },
      {
        test: /\.js$/,
        use: "babel-loader",
        exclude: /node_modules/,
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: "css/[name].css",
    }),
  ],
};
