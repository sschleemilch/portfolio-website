module.exports = function(grunt) {
	grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
 	grunt.loadNpmTasks('grunt-newer');

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
        	files: ['src/js/**/*.js', 'src/sass/*.sass'],
        	tasks: ['newer:jshint:all', 'newer:uglify:all', 'sass:all', 'newer:cssmin:target']
        }
    });
    grunt.registerTask('default', ['jshint:all', 'uglify:all', 'sass:all', 'cssmin:target', 'watch']);
};
