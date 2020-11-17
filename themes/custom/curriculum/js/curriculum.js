$(document).ready(function () {
  /* Hide french content on english page and visavesa*/
    $("html:lang(fr) :lang(en)").hide();
    $("html:lang(en) :lang(fr)").hide();
  
    /* Course Content */
    if ($('.view-display-id-curriculum_course > .view-content .view-grouping').length == 3) {
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1)').addClass("col-12 curriculum_big_ideas");
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1) .curriculum-content').addClass("row mx-0").parent().addClass("mx-0 px-0");
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(2)').addClass("col-12 col-md-5 curriculum_content");
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(3)').addClass("col-12 col-md-7 curriculum_competencies");
    } else {
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1)').addClass("col-12 curriculum_big_ideas");
      $('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(1) .curriculum-content').addClass("row");
      $('<div class="view-grouping col-12 col-md-5 curriculum_content"><div class="view-grouping-header">Content</div><div class="view-grouping-content"></div></div>').insertBefore($('.view-display-id-curriculum_course > .view-content .view-grouping:nth-child(2)').addClass("col-12 col-md-7 curriculum_competencies"));
    }
  
    /* curricular Competency Group as an elaboration */
    $.each($('.curriculum-content .views-row:nth-child(1) a'), function () {
      if ($(this).text() == $(this).parent().parent().parent().parent().parent().prev().text()) {
  
        $(this).parent().parent().parent().parent().parent().prev().hide();
        $(this).parent().parent().parent().parent().addClass("ccg_keyword_w_elaboration");
        $(this).wrap('<h4></h4>');
      }
    });
    /* Reposition Stem text*/
  
    $('.curriculum_competencies .view-grouping-content').prepend('<div class="curriculum-stem">' + $(".views-field-field-curricular-competency-stem .field-content").html() + '</div>');
    $('.curriculum_content .view-grouping-content').prepend('<div class="curriculum-stem">' + $(".views-field-field-concept-content-stem .field-content").html() + '</div>');
    $(".views-field-field-concept-content-stem .field-content , .views-field-field-curricular-competency-stem .field-content").css("display", "none");
  
    $('.dropdown-toggle').dropdown();
    $('[data-toggle="popover"]').popover({
      trigger: 'hover',
      content: function () {
        return $(".elaboration." + $(this).attr('class')).html();
      }
    });
    $('[data-toggle="popover"]').click(function () {
      $(this).next().slideToggle();
      return false; //disable the scroll to top
    });
  
  
    /* Elaborations Expand*/
  
    $(".view-grouping.curriculum_content .view-grouping-header").append('<div class="description">Students will build specific competencies based on this course</div>');
    //$(".view-grouping.curriculum_content .view-grouping-header").append('<button class="btn btn-info toggle-description">?</button><div class="description">Students will build specific competencies based on this course</div>'); 
    $(".view-grouping.curriculum_content").prepend('<button class="btn btn-info toggle-elaborations">Elaborations +</button>');
    $(".view-grouping.curriculum_competencies .view-grouping-header").append('<div class="description">A student will learn this content in this course</div>');
    //$(".view-grouping.curriculum_competencies .view-grouping-header").append('<button class="btn btn-info toggle-description">?</button><div class="description">A student will learn this content in this course</div>'); 
    $(".view-grouping.curriculum_competencies").prepend('<button class="btn btn-info toggle-elaborations">Elaborations +</button>');
  
    $(".curriculum_content .toggle-elaborations").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").html("Elaborations +")
      } else {
        $(this).addClass("active").html("Elaborations -")
      }
      $(".curriculum_content .elaboration").slideToggle();
    });
    $(".curriculum_competencies .toggle-elaborations").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").html("Elaborations +")
      } else {
        $(this).addClass("active").html("Elaborations -")
      }
      $(".curriculum_competencies .elaboration").slideToggle();
    });
  
  
    /* Competency illustrations */
    var count = $(".field--name-field-profiles > div > .field__items  > .field__item").length;
    $(".field--name-field-profiles  > div > .field__items").addClass("count-" + count);
    var subject = $('.grade-changer .dropdown-menu > div').attr('class');
    var course = $('.grade-changer .dropdown-menu div div').attr('class');
    if (subject == "languages") {
      if (course) {
        $('.grade-changer .dropdown-menu div').html($(".gradepicker-subject." + subject + " ul." + course).html());
      } else {
        $('.grade-changer .dropdown-menu div').html($(".gradepicker-subject.languages" + " ul").html());
      }
    } else {
      $('.grade-changer .dropdown-menu div').html($(".gradepicker-subject." + subject + " ul").html());
    }
    $("h1.title").empty().remove();
  });
  
  
  