/**
 * applies filter to cohort selection list
 */
// jshint undef:false, unused:false

define(['jquery', 'core/config', 'core/log'], function($, cfg, log) {

    var options = $('#id_customint1').find('option');

    var cohortrestricted = {
        init: function() {
            $('#id_cohortfilter').bind('change', this.filterlist);

            log.debug('AMD Enrol cohortrestricted cohortchoicefilter initialized');
        },

        filterlist: function() {

            var filter = $(this).val();

            var i = 1;

            $('#rc-ajax-loader').html('<img src="' + cfg.wwwroot + '/pix/i/ajaxloader.gif">');

            options.each(function() {
                var that = $(this);
                that.removeAttr('selected');
                if (that.text().indexOf(filter) != -1) {
                    that.show();
                    if (i == 1) {
                        that.attr('selected', 'selected');
                    }
                    i++;
                } else {
                    that.hide();
                }
            });

            $('#rc-ajax-loader').html('');
        }
    };

    return cohortrestricted;

});