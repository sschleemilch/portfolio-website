module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.initConfig({
        jshint: {
            all: ['src/**/*.js']
        },
        uglify: {
        	files: {
        		src: 'src/**/*.js',
        		dest: 'src/jsm/',
        		ext: '.min.js',
        		expand: true,
        		flatten: true
        	}
        },
        sass: {
        	all: {
        		files: {
        			'src/css/style.css' : 'src/sass/style.scss'
        		}
        	}
        },
        watch: {
        	files: ['src/**/*.js', 'src/**/*.scss'],
        	tasks: ['jshint', 'uglify', 'sass']
        }
    });

    grunt.registerTask('default', ['watch']);
};
