// Gruntfile.js

// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function(grunt) {

  // ===========================================================================
  // CONFIGURE GRUNT ===========================================================
  // ===========================================================================
  grunt.initConfig({

    // get the configuration info from package.json ----------------------------
    // this way we can use things like name and version (pkg.name)
    pkg: grunt.file.readJSON('package.json'),

	  // all of our configuration will go here
    jshint: {
      options: {
        reporter: require('jshint-stylish') // use jshint-stylish to make our errors look and read good
      },

	  // when this task is run, lint the Gruntfile and all js files in src
      build: ['Grunfile.js', 'src/**/*.js']
    },

    // configure uglify to minify js files -------------------------------------
    uglify: {
      options: {
        banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
      },
      build: {
        files: {
          'dist/js/main.min.js': 'src/js/main.js'
        }
      }
    },

    compass: {
      compile: {
        options: {
          sassDir: 'src/sass',
          cssDir: 'dist/css'
        }
      }
    },

    cssmin: {
      build: {
        files: {
          'style.css': 'dist/css/style.css'
        }
      }
    },

    watch: {

      stylesheets: {
        files: ['src/**/*.css', 'src/**/*.scss'],
        tasks: ['compass', 'cssmin']
      },

      scripts: {
        files: 'src/**/*.js',
        tasks: ['jshint', 'uglify']
      }
    }

  });

  grunt.registerTask('default', ['jshint', 'uglify', 'compass', 'cssmin']);

  // ===========================================================================
  // LOAD GRUNT PLUGINS ========================================================
  // ===========================================================================
  // we can only load these if they are in our package.json
  // make sure you have run npm install so our app can find these
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

};
