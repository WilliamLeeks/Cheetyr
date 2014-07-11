module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/project.js',
        dest: 'js/project.min.js'
      }
    },
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/style.css': 'scss/style.scss'
        }
      }
    },
    watch: {
      options: {
        livereload: true
      },
      files: '*.php',
      css: {
        files: 'scss/*.scss',
        tasks: 'sass'
      },
      scripts: {
        files: 'js/*.js',
        tasks: 'uglify'
      },
      images: {
        files: ['img/*.png', 'img/*.jpg'],
        tasks: 'imageoptim'
      }
    },
    imageoptim: {
      myTask: {
        options: {
          jpegMini: false,
          imageAlpha: true,
          quitAfter: true
        },
        src: ['img']
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Load the plugin that provides the SCSS compiler task.
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Load the plugin that provides the watch task.
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Load the plugin that provides the image optimisation task.
  grunt.loadNpmTasks('grunt-imageoptim');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass']);

};