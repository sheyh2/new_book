/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
// Ajax
function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

$(document).ready(function () {
    $('[name="lang"]').change(function () {
        let categoryEdit = $('#category_edit');
        let t = getFormData(categoryEdit);
        let data = new Map([
            ['name', 123],
            ['name1', 123],
        ]);
        categoryEdit.serializeArray().each(function (key, val) {
            console.log('1: ' + val);
        });
        // $.ajax({
        //     type: 'post',
        //     url:   window.location.origin + 'api/'
        // });
    });
});
