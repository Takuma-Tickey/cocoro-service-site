(function (wp) {
    if (!wp || !wp.hooks) {
        return;
    }

    function overrideFeaturedImageEditor(OriginalComponent) {
        return function (props) {
            if (!props.media) {
                return wp.element.createElement(OriginalComponent, props);
            }

            let modifiedMedia = { ...props.media };

            if (modifiedMedia.media_details && modifiedMedia.media_details.sizes) {
                if (modifiedMedia.media_details.sizes.medium_size && props.media.media_details.sizes.medium_size.source_url) {
                    modifiedMedia.media_details.sizes.thumbnail.source_url = props.media.media_details.sizes.medium_size.source_url;
                } else if (modifiedMedia.media_details.sizes.small_size && props.media.media_details.sizes.small_size.source_url) {
                    modifiedMedia.media_details.sizes.thumbnail.source_url = props.media.media_details.sizes.small_size.source_url;
                }

                if (props.media.width && props.media.height) {
                    modifiedMedia.width = props.media.width;
                    modifiedMedia.height = props.media.height;
                }
            }

            return wp.element.createElement(OriginalComponent, { ...props, media: modifiedMedia });
        };
    }

    wp.domReady(function () {
        wp.hooks.addFilter(
            'editor.PostFeaturedImage',
            'my-custom-plugin/override-featured-image-editor',
            overrideFeaturedImageEditor
        );
    });
})(window.wp);
