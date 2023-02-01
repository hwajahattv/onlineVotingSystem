$(document).ready(function () {
    $('#candidateID1').change(function () {
        $("#2nd_pref_block").removeClass("hideField");
        // $('#candidateID2')[0].remove($('#candidateID1')[0].selectedIndex);
        // $('#candidateID3')[0].remove($('#candidateID1')[0].selectedIndex);
    });
    $('#candidateID2').change(function () {
        $("#3rd_pref_block").removeClass("hideField");
        // $('#candidateID3')[0].remove($('#candidateID2')[0].selectedIndex);
    });
});