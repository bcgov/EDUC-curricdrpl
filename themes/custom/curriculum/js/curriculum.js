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
    $(".views-field-field-concept-content-stem .field-content , .views-field-field-curricular-competency-stem .field-content").css("display", "none");


    var availableTags = [
        {label: "Studio Arts 3D 11", value: "/curriculum/arts-education/11/studio-arts-3D"},
        {label: "Studio Arts 2D 11", value: "/curriculum/arts-education/11/studio-arts-2D"},
        {label: "Photography 11", value: "/curriculum/arts-education/11/photography"},
        {label: "Graphic Arts 11", value: "/curriculum/arts-education/11/graphic-arts"},
        {label: "Art Studio 11", value: "/curriculum/arts-education/11/art-studio"},
        {label: "Instrumental Music 11", value: "/curriculum/arts-education/11/instrumental-music"},
        {label: "Contemporary Music 11", value: "/curriculum/arts-education/11/contemporary-music"},
        {label: "Composition & Production 11", value: "/curriculum/arts-education/11/composition-and-production"},
        {label: "Choral Music 11", value: "/curriculum/arts-education/11/choral-music"},
        {label: "Theatre Production 11", value: "www.google.ca"},
        {label: "Theatre Company 11", value: "www.google.ca"},
        {label: "Film & Television 11", value: "www.google.ca"},
        {label: "Drama 11", value: "www.google.ca"},
        {label: "Directing and Script Development 11", value: "www.google.ca"},
        {label: "Dance Technique and Performance 11", value: "www.google.ca"},
        {label: "Dance Foundations 11", value: "www.google.ca"},
        {label: "Dance Conditioning 11", value: "www.google.ca"},
        {label: "Dance Company 11", value: "www.google.ca"},
        {label: "Dance Choreography 11", value: "www.google.ca"},
        {label: "Musical Theatre 11", value: "www.google.ca"},
        {label: "Media Arts 11", value: "www.google.ca"},
        {label: "Arts Education 1", value: "www.google.ca"},
        {label: "Arts Education 2", value: "www.google.ca"},
        {label: "Arts Education 3", value: "www.google.ca"},
        {label: "Arts Education 4", value: "www.google.ca"},
        {label: "Arts Education 5", value: "www.google.ca"},
        {label: "Arts Education 6", value: "www.google.ca"},
        {label: "Arts Education 7", value: "www.google.ca"},
        {label: "Arts Education 8", value: "www.google.ca"},
        {label: "Arts Education 9", value: "www.google.ca"}
    ];
    console.log(availableTags);
    $( "#tags" ).autocomplete({
        source: availableTags,
        select: function( event, ui ) {
            window.location.href = ui.item.value;
        }
    });
    console.log("hello");
});