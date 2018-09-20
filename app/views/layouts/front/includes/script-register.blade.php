<script type="text/javascript">
$(document).ready(function() {
  // multiselect
  jQuery('#profession').multiselect({
        enableFiltering: false,
        buttonWidth: '100%',
        maxHeight:400,
        enableCaseInsensitiveFiltering:false,
        nonSelectedText: 'Please select category',
        numberDisplayed: 2,
        selectAll: false,
        onChange: function(option, checked) {
                // Get selected options.
                var selectedOptions = jQuery('#profession option:selected');

                if (selectedOptions.length >= 5) {
                    // Disable all other checkboxes.
                    var nonSelectedOptions = jQuery('#profession option').filter(function() {
                        return !jQuery(this).is(':selected');
                    });

                    nonSelectedOptions.each(function() {
                        var input = jQuery('input[value="' + jQuery(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                }
                else {
                    // Enable all checkboxes.
                    jQuery('#profession option').each(function() {
                        var input = jQuery('input[value="' + jQuery(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            }});
     /*Add This to Block SHIFT Key*/
    var shiftClick = jQuery.Event("click");
    shiftClick.shiftKey = true;

    $(".multiselect-container li *").click(function(event) {
        if (event.shiftKey) {
           //alert("Shift key is pressed");
            event.preventDefault();
            return false;
        }
        else {
            //alert('No shift hey');
        }
    });

    // REGISTRATION PROCESS
    $('.btn-reg').click(function() {
      var openTab = $(this).data('container');
      // console.log(openTab);
      $('.show').addClass('hide').removeClass('show');
      $('#'+openTab).addClass('show');
    });

});

</script>
