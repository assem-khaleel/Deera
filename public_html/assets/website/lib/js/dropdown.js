
$('.mainSelect').change(function(){
    var mainSelectNode=$(this);
    var prefixText='-'+mainSelectNode.find("option:selected").text().toLowerCase();


    var targetNode=$($(this).data('target'));
    var targetOptionArray=targetNode.find('option');

    if(targetOptionArray.length > 0){

        targetOptionArray.each(function(){

            if($(this).text().toLowerCase().indexOf(prefixText) >-1){
                $(this).show();
                $(this).prop('selected',true);
            }else{
                $(this).hide();
            }
        });

    }



});

var mainSelectArray=$('.mainSelect');
if(mainSelectArray.length >0){
    mainSelectArray.eq(0).change();
}