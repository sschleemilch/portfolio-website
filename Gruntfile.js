module.exports = function(grunt) {
	grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
 	grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-copy')

    grunt.initConfig({
        jshint: {
            all: ['src/js/**/*.js']
        },
        uglify: {
        	all: {
        		src: ['src/js/**/*.js'],
        		dest: 'src/jsm/',
        		ext: '.min.js',
        		expand: true,
        		flatten: true
        	}
        },
        sass: {
        	all: {
        		files: {
        			'src/css/style.css' : 'src/sass/style.sass'
        		}
        	}
        },
       cssmin: {
        target: {
            files: [{
                expand: true,
                cwd: 'src/css',
                src: ['*.css', '!*.min.css'],
                dest: 'src/css',
                ext: '.min.css'
            }]
        }
        },
        watch: {
        	files: ['src/js/**/*.js', 'src/sass/**/*.sass'],
        	tasks: ['newer:jshint:all', 'newer:uglify:all', 'sass:all', 'newer:cssmin:target']
        },
        copy: {
            main:{
               files: [
                    {expand: true, flatten:true, src: ['src/css/*.min.css'], dest: 'dist/html/css'},
                    {expand: true, flatten:true, src: ['src/img/*'], dest: 'dist/html/img'},
                    {expand: true, flatten:true, src: ['src/jsm/*'], dest: 'dist/html/jsm'},
                    {expand: true, flatten:true, src: ['src/*.php'], dest: 'dist/html/'},
                    {expand: true, flatten:true, src: ['src/profile/*.php'], dest: 'dist/html/profile'},
                    {expand: true, flatten:true, src: ['src/templates/*.php'], dest: 'dist/html/templates'},
                    {expand: true, flatten:true, src: ['src/projects/*.php'], dest: 'dist/html/projects'},
                    {expand: true, flatten:true, src: ['src/projects/website/*.php'], dest: 'dist/html/projects/website'},
                    {expand: true, flatten:true, src: ['src/data/*'], dest: 'dist/html/data'},
                    {expand: true, flatten:true, src: ['src/php/*.php'], dest: 'dist/html/php'},
               ]
            }
        }
    });
    grunt.registerTask('default', ['jshint:all', 'uglify:all', 'sass:all', 'cssmin:target', 'watch']);
    grunt.registerTask('build', ['jshint:all', 'uglify:all', 'sass:all', 'cssmin:target']);
    grunt.registerTask('release', ['jshint:all', 'uglify:all', 'sass:all', 'cssmin:target', 'copy:main']);
};
