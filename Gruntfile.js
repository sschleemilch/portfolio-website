module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['watch']);

    grunt.initConfig({
        jshint: {
            all: ['src/**/*.js']
        },
        uglify: {
        	target: {
        		src: 
        	}
        },
        watch: {
        	files: ['src/**/*.js'],
        	tasks: ['jshint', 'concat', 'uglify']
        }
    });
};
