(function() {
  if ('require' in window) {
    require("discourse/lib/theme-settings-store").registerSettings(6, {"theme_uploads":{"ameise_login_1":"/uploads/default/original/2X/a/aa8e0829c290d4e0217fba14ff28a5064aaa5801.svg"}});
  }
})();
if ('define' in window) {
define("discourse/theme-6/initializers/theme-field-30-common-html-script-1", ["exports", "discourse/lib/plugin-api"], function (_exports, _pluginApi) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.default = void 0;

  var settings = require("discourse/lib/theme-settings-store").getObjectForTheme(6);

  var themePrefix = function themePrefix(key) {
    return "theme_translations.6.".concat(key);
  };

  var _default = {
    name: "theme-field-30-common-html-script-1",
    after: "inject-objects",
    initialize: function initialize() {
      (0, _pluginApi.withPluginApi)("0.8", function (api) {
        api.replaceIcon('sign-in-alt', 'ameise_login_1');
      });
    }
  };
  _exports.default = _default;
});
}
