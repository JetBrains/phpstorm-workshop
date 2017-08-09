/**
 * JavaScript Unit Testing (using Karma)
 */

// 1. Install the Karma plugin (IDE Settings | Plugins).
// 2. Install the Karma test runner on your system using NPM:
//      npm install -g karma
//      (or open the Settings Pane then Languages & Frameworks | Node.js and NPM, search Karma and add the -g install option)
// 3. Make sure a Karma configuration is created. Either rename karma.conf.js.sample to karma.conf.js or set it up manually.
//
//    Manual steps: Open a terminal (Tools | Open Terminal) and initialize karma in the current folder.
//      cd "08_Testing"
//      karma init
//
//    - Select the test framework to use, we'll go with jasmine.
//    - Select "no" on using Require.js.
//    - Select the browser to capture.
//    - For test location, enter *.js so Karma will run all tests in the current folder.
//    - For excluding files, leave an empty string. More info can be found in the Karma documentation.
//    - For automatically running, select "no". When enabled, this will automatically run unit tests whenever
//      code or tests are changed.
// 4. Create a new run configuration based on Karma. Specify a name, the path to Node.js
//    and to the karma.conf.js we just created.
// 5. Run the configuration. Note that Karma will open a browser and run the unit tests defined below.
//    Test results are visible in the IDE.

describe("Sample test suite", function() {
    it("a boolean true should be true", function() {
        expect(true).toBe(true);
    });
    it("a boolean false should be false", function() {
        expect(false).toBe(false);
    });
});
