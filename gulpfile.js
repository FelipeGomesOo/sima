const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");

function compileSass() {
  return src("src/scss/*.scss")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest("public/css"));
}

function minifyCss() {
  return src("public/css/styles.min.css").pipe(cleanCSS());
}

function minifyJs() {
  return src("src/js/*.js")
    .pipe(concat("app.js"))
    .pipe(uglify())
    .pipe(dest("public/js/"));
}

function watchFiles() {
  watch("src/scss/**/*.scss", compileSass);
  watch("public/css/styles.min.css", minifyCss);
  watch("src/js/*.js", minifyJs);
}

exports.default = series(compileSass, minifyCss, minifyJs, watchFiles);
