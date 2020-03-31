$(document).ready(function(){
    $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1)').addClass("col-12 curriculum_big_ideas");
    $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1) .curriculum-content').addClass("row");
    $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(2)').addClass("col-12 col-md-5 curriculum_content");
    $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(3)').addClass("col-12 col-md-7 curriculum_competencies");
    

    /* curricular Competency Group as an elaboration */

    $.each($('.curriculum-content .views-row:nth-child(1) a'),function(){
        console.log($(this).text() + " | " + $(this).parent().parent().parent().parent().parent().prev().text());
        if($(this).text() == $(this).parent().parent().parent().parent().parent().prev().text()){
            
            $(this).parent().parent().parent().parent().parent().prev().hide();
            $(this).parent().parent().parent().parent().addClass("ccg_keyword_w_elaboration");
            $(this).wrap('<h4></h4>');
        }else{
           
        }
    });
    /* Reposition Stem text*/

    $('.curriculum_competencies .view-grouping-content').prepend('<div class="curriculum-stem">' + $(".views-field-field-curricular-competency-stem .field-content").html() + '</div>');
    $('.curriculum_content .view-grouping-content').prepend('<div class="curriculum-stem">' + $(".views-field-field-concept-content-stem .field-content").html() + '</div>');
    $(".views-field-field-concept-content-stem .field-content , .views-field-field-curricular-competency-stem .field-content").css("display","none");


    var availableTags = [
        "Studio Arts 3D 11",
        "Studio Arts 2D 11",
        "Photography 11",
        "Graphic Arts 11",
        "Art Studio 11",
        "Instrumental Music 11",
        "Contemporary Music 11",
        "Composition & Production 11",
        "Choral Music 11",
        "Theatre Production 11",
        "Theatre Company 11",
        "Film & Television 11",
        "Drama 11",
        "Directing and Script Development 11",
        "Dance Technique and Performance 11",
        "Dance Foundations 11",
        "Dance Conditioning 11",
        "Dance Company 11",
        "Dance Choreography 11",
        "Musical Theatre 11",
        "Media Arts 11",
        "Arts Education 1",
        "Arts Education 2",
        "Arts Education 3",
        "Arts Education 4",
        "Arts Education 5",
        "Arts Education 6",
        "Arts Education 7",
        "Arts Education 8",
        "Arts Education 9"
      ];
    $( "#tags" ).autocomplete({
    source: availableTags
    });

});