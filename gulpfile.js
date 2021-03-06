var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		concat         = require('gulp-concat'),
		uglify         = require('gulp-uglify'),
		cleanCSS       = require('gulp-clean-css'),
		rename         = require('gulp-rename'),
		del            = require('del'),
		imagemin       = require('gulp-imagemin'),
		cache          = require('gulp-cache'),
		autoprefixer   = require('gulp-autoprefixer'),
		ftp            = require('vinyl-ftp'),
		notify         = require("gulp-notify");

// Скрипты проекта

// All start 
gulp.task('all-js', function() {
	return gulp.src([
		'src/js/common.js',
		])
	.pipe(concat('all.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// All end 

// Common
gulp.task('common-js', function() {
	return gulp.src([
		'src/js/libs/*.js',
		'src/js/libs/datapicker/picker.js',
		'src/js/libs/datapicker/picker.date.js',
		'src/js/libs/datapicker/picker.time.js',
		'src/js/libs/datapicker/ru_RU.js',
		'src/js/common.js',
		])
	.pipe(concat('common.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// Common

// Home start
gulp.task('home-js', function() {
	return gulp.src([
		'src/js/home.js',
		])
	.pipe(concat('home.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// Home end

// News start
gulp.task('news-js', function() {
	return gulp.src([
		'src/js/news.js',
		])
	.pipe(concat('news.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// News end

// salon start
gulp.task('salon-js', function() {
	return gulp.src([
		'src/js/salon.js',
		])
	.pipe(concat('salon.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// salon end

// spa start
gulp.task('spa-js', function() {
	return gulp.src([
		'src/js/spa.js',
		])
	.pipe(concat('spa.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// spa end

// clinic start
gulp.task('clinic-js', function() {
	return gulp.src([
		'src/js/clinic.js',
		])
	.pipe(concat('clinic.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// clinic end

// contact start
gulp.task('contact-js', function() {
	return gulp.src([
		'src/js/contact.js',
		])
	.pipe(concat('contact.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// contact end

// fitness start
gulp.task('fitness-js', function() {
	return gulp.src([
		'src/js/fitness.js',
		])
	.pipe(concat('fitness.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// fitness end

// photo-studio start
gulp.task('photo-studio-js', function() {
	return gulp.src([
		'src/js/photo-studio.js',
		])
	.pipe(concat('photo-studio.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});
// photo-studio end

gulp.task('js', [
	'common-js',
	'home-js',
	'news-js',
	'salon-js',
	'spa-js',
	'clinic-js',
	'fitness-js',
	'photo-studio-js',
	'contact-js'
	], function() {
	return gulp.src([
		'src/js/common.js',
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Минимизировать весь js (на выбор)
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function() {
	browserSync({
		proxy: "sandler/dist",
    	notify: false // Отключаем уведомления
	});
});

gulp.task('sass', function() {
	return gulp.src(['src/sass/**/*.sass', 'src/sass/**/*.scss'])
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleanCSS()) // Опционально, закомментировать при отладке
	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('watch', ['sass', 'js', 'browser-sync'], function() {
	gulp.watch('src/sass/**/*.scss', ['sass']);
	gulp.watch(['libs/**/*.js', 'src/**/*.js'], ['js']);
	gulp.watch('dist/**/*.php', browserSync.reload);
	gulp.watch('dist/*.html', browserSync.reload);
});

gulp.task('imagemin', function() {
	return gulp.src('src/img/**/*')
	.pipe(cache(imagemin()))
	.pipe(gulp.dest('dist/img')); 
});

gulp.task('build', ['removedist', 'imagemin', 'sass', 'js'], function() {

	var buildFiles = gulp.src([
		'src/*.html',
		'src/.htaccess',
		]).pipe(gulp.dest('dist'));

	var buildCss = gulp.src([
		'src/css/main.min.css',
		]).pipe(gulp.dest('dist/css'));

	var buildJs = gulp.src([
		'src/js/scripts.min.js',
		]).pipe(gulp.dest('dist/js'));

	var buildFonts = gulp.src([
		'src/fonts/**/*',
		]).pipe(gulp.dest('dist/fonts'));

});

/*gulp.task('deploy', function() {

	var conn = ftp.create({
		host:      'hostname.com',
		user:      'username',
		password:  'userpassword',
		parallel:  10,
		log: gutil.log
	});

	var globs = [
	'dist/**',
	'dist/.htaccess',
	];
	return gulp.src(globs, {buffer: false})
	.pipe(conn.dest('/path/to/folder/on/server'));

});*/

gulp.task('removedist', function() { return del.sync('dist'); });
gulp.task('clearcache', function () { return cache.clearAll(); });

gulp.task('default', ['watch']);
