jQuery(function ($) {
    $(document).ready(function () {
        const getTitleElement = () => document.querySelector(".editor-post-title");

        const updateTitleCount = () => {
            const titleElement = getTitleElement();
            if (!titleElement) return;
            let titleText = titleElement.textContent || "";
            let titleCnt = titleText.replace(/\s+/g, "").length;
            const reg = /^[\u0009-\u000d\u001c-\u0020\u11a3-\u11a7\u1680\u180e\u2000-\u200f\u202f\u205f\u2060\u3000\u3164\ufeff\u034f\u2028\u2029\u202a-\u202e\u2061-\u2063\ufeff]*$/;
            if (reg.test(titleText)) {
                $(".jinr-title-count").text("タイトル文字数:0");
            } else {
                $(".jinr-title-count").text("タイトル文字数:" + titleCnt);
            }
        };

        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === "childList") {
                    if (!$(".jinr-title-count").length) {
                        $("<span/>", {
                            class: "jinr-title-count",
                        }).insertAfter(getTitleElement());
                        updateTitleCount();
                    }
                }
            });
        });

        const observeEditor = () => {
            const editor = document.querySelector(".edit-post-layout");
            if (editor) {
                observer.observe(editor, {
                    childList: true,
                    subtree: true,
                });
            } else {
                setTimeout(observeEditor, 500);
            }
        };

        observeEditor();
        $(document).on("input", ".editor-post-title", updateTitleCount);
    });
});
