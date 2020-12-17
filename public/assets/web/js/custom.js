jQuery(document).ready(function(){
  "use strict"; // Start of use strict

  // disable icon converting to svg
  // window.FontAwesomeConfig = { autoReplaceSvg: false }
  FontAwesomeConfig = { autoReplaceSvg: 'nest' }

  // ----------------------------------
  // search filters
  // ----------------------------------

  // ---------------- age range ------------------
  const ageMin = 18;
  const ageMax = 80;
  let ageRangeOutput = $("#ageRangeOutput");
  let ageRangeSlider = $("#ageRangeSlider");
  let expAgeStart = parseInt($("input[name='expect_age_start']").val());
  let expAgeEnd = parseInt($("input[name='expect_age_end']").val());
  ageRangeSlider.slider({
    range:true,
    min:ageMin,
    max:ageMax,
    values:[
      expAgeStart ? expAgeStart : ageMin, 
      expAgeEnd ? expAgeEnd : ageMax
    ],
    step:1,
    slide:function(event, ui){
      ageRangeOutput.html(ui.values[0]+' - '+ui.values[1]);
      $("#ageMin").val(ui.values[0]);
      $("#ageMax").val(ui.values[1]);
    }
  });
  ageRangeOutput.html(ageRangeSlider.slider("values",0)+' - '+ageRangeSlider.slider("values",1));
  $("#ageMin").val(ageRangeSlider.slider('values', 0));
  $("#ageMax").val(ageRangeSlider.slider('values', 1));

  // ------------ height range --------------------
  const decimalPoitArray = ['00', '08', '17', '25', '33', '42', '50', '58', '67', '75', '83', '92'];

  let convertCentemeterToFeet = function(value) {
    const oneFeetInCentemeter = 30.48;
    let toFeet = value/oneFeetInCentemeter;
    return toFeet.toFixed(2);    
  }

  let formatToReadableFeet = function(value) {
    const floatString = `${value}`;
    const findPos = floatString.indexOf('.');
    if(findPos >= 0) {
      const decimalNum = floatString.substr(0, findPos);
      const decimalPointNum = floatString.substr(findPos+1);
      for(let i = 0; i < decimalPoitArray.length; i++) {
        if(decimalPoitArray[i] == decimalPointNum){
          return `${decimalNum}'${i}"`;
        }
      }
    }
    return `${floatString}'`;
  }

  const oneFootInCentemeter = 2.54;
  const fourFeet = 48;
  const eightFeet = 96;
  let centemeterMin = fourFeet*oneFootInCentemeter;
  let centemeterMax = eightFeet*oneFootInCentemeter;
  let heightRangeOutput = $("#heightRangeOutput");
  let heightRangeSlider = $("#heightRangeSlider");
  let expHeightStart = parseInt($("input[name='expect_height_start']").val());
  let expHeightEnd = parseInt($("input[name='expect_height_end']").val());
  heightRangeSlider.slider({
    range:true,
    min:centemeterMin,
    max:centemeterMax,
    values:[
      expHeightStart ? expHeightStart : centemeterMin, 
      expHeightEnd ? expHeightEnd : centemeterMax
    ],
    step:oneFootInCentemeter,
    slide:function(event, ui){
      heightRangeOutput.html(
        formatToReadableFeet(convertCentemeterToFeet(ui.values[0]))
        +' - '
        +formatToReadableFeet(convertCentemeterToFeet(ui.values[1]))
      );
      $("#heightMin").val(Math.round(ui.values[0]));
      $("#heightMax").val(Math.round(ui.values[1]));
    }
  });
  heightRangeOutput.html(
    formatToReadableFeet(convertCentemeterToFeet(heightRangeSlider.slider("values",0)))
    +' - '
    +formatToReadableFeet(convertCentemeterToFeet(heightRangeSlider.slider("values",1)))
  );
  $("#heightMin").val(Math.round(heightRangeSlider.slider('values', 0)));
  $("#heightMax").val(Math.round(heightRangeSlider.slider('values', 1)));


  // ---------------------------------- 
  // height select 
  // ---------------------------------
  let heightOutput = $("#heightOutput");
  let heightSlider = $("#heightSlider");
  let height = parseInt($("input[name='height']").val());
  heightSlider.slider({
    range:false,
    min: centemeterMin,
    max:centemeterMax,
    values:[height ? height : centemeterMin],
    step:oneFootInCentemeter,
    slide:function(event, ui){
      heightOutput.html(
        formatToReadableFeet(convertCentemeterToFeet(ui.values[0]))
      );
      $("#height").val(Math.round(ui.values[0]));
    }
  });
  heightOutput.html(
    formatToReadableFeet(convertCentemeterToFeet(heightSlider.slider("values",0)))
  );
  $("#height").val(Math.round(heightSlider.slider('values', 0)));

});