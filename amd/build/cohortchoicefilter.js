/**
 * applies filter to cohort selection list
 */
// jshint undef:false, unused:false
/* globals $ */


define(['jquery', 'core/log'], function($, log) {

    var options = $('#id_customint1').find('option');

    filterlist = function(){

        filter = $(this).val();

        i = 1;

        $('#rc-ajax-loader').html('<img src="' + M.cfg.wwwroot + '/pix/i/ajaxloader.gif">');

        options.each(function() {
            $this = $(this);
            $this.removeAttr('selected');
            if ($this.text().indexOf(filter) != -1) {
                $this.show();
                if (i == 1) {
                    $this.attr('selected', 'selected');
                }
                i++;
            } else {
                $this.hide();
            }
        });

        $('#rc-ajax-loader').html('');
    };

    return {
        init: function() {
            $('#id_cohortfilter').bind('change', filterlist);

            log.debug('AMD Enrol cohortrestricted cohortchoicefilter initialized');
        }
    };

});