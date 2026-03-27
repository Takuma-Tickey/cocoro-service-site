(function (api, wp, $) {
  "use strict";
  var JINR_INDEX = 1;

  api.bind("ready", function () {
    api.panel.add(
      new api.Panel("jinr__blog_parts_panel2", {
        title: "test panel",
      })
    );
    $.each(JINR_DYNAMIC_SETTINGS, function (index, value) {
      var section_name = "アイコンメニュー" + JINR_INDEX;
      var section_params = {
        title: "アイコンメニュー" + JINR_INDEX,
        panel: "jinr__blog_parts_panel",
        customizeAction: "カスタマイズ ▸ アイコンメニュー",
      };
      var newAddSection = new api.Section(section_name, section_params);
      api.section.add(newAddSection);
      api.add(new api.Setting(index, value));
      api.control.add(
        new api.Control("control_test_" + JINR_INDEX, {
          setting: "jinr__iconmenu" + JINR_INDEX,
          type: "text",
          section: section_name,
          label: "アイコンメニューのタイトル",
          default: "MENU",
        })
      );
      JINR_INDEX++;
    });

    var tsection = this.section("jinr__iconmenu_register_tab");
    var container = tsection.container;
    tsection.contentContainer.append(wp.template("jinr-template"));
    container.on("click", ".customize-add-menu-button", function () {
      var section_name = "アイコンメニュー" + JINR_INDEX;
      var section_params = {
        title: "アイコンメニュー" + JINR_INDEX,
        panel: "jinr__blog_parts_panel",
        customizeAction: "カスタマイズ ▸ アイコンメニュー",
      };
      var newAddSection = new api.Section(section_name, section_params);
      api.section.add(newAddSection);
      api.add(new api.Setting("jinr__iconmenu" + JINR_INDEX));
      var aiueo = api.control.add(
        new api.Control("control_test_" + JINR_INDEX, {
          setting: "jinr__iconmenu" + JINR_INDEX,
          type: "text",
          section: section_name,
          label: "アイコンメニューのタイトル",
          default: "MENU",
        })
      );

      JINR_INDEX++;
      aiueo.focus();
    });
  });
})(wp.customize, wp, jQuery);
