const loader = '<div class="widget loader rtl active"><svg xmlns="http://www.w3.org/2000/svg" width="47.005" height="59.733" viewBox="0 0 47.005 59.733"><g id="sync" transform="translate(-9.074)"><path id="Path_83" data-name="Path 83" d="M52.4,15l-2.894,3.126A19.37,19.37,0,0,1,37.849,53.683l.764-.8h-.046l2.9-3.038L38.79,47.291,33.047,53.32v0l-2.478,2.6,2.673,2.55h0l6.027,5.743,2.48-2.6-3.9-3.719A23.575,23.575,0,0,0,52.4,15Z" transform="translate(-6.419 -4.479)" fill="#fff"></path><path id="Path_84" data-name="Path 84" d="M13.521,26.863a19.375,19.375,0,0,1,20.2-16.334l-.764.8H33l-2.9,3.038,2.674,2.552,5.743-6.029v0L41,8.293l-2.673-2.55h0L32.3,0l-2.48,2.6,3.9,3.719A23.576,23.576,0,0,0,19.171,49.214l2.894-3.126A19.4,19.4,0,0,1,13.521,26.863Z" fill="#fff"></path></g></svg><span>جاري التحميل...</span></div>';

const error = (message) => '<div class="widget error"><form><svg xmlns="http://www.w3.org/2000/svg" width="71.762" height="62.505" viewBox="0 0 71.762 62.505"><g id="warning" transform="translate(0 -33.02)"><g id="Group_173" data-name="Group 173" transform="translate(0 33.02)"><g id="Group_172" data-name="Group 172" transform="translate(0 0)"><path id="Path_87" data-name="Path 87" d="M70.945,79.631a2.8,2.8,0,0,0-5.207,2.078,5.992,5.992,0,0,1-.64,5.584A5.913,5.913,0,0,1,60.13,89.92H11.642a6.021,6.021,0,0,1-5.115-9.187L30.771,41.48A6.011,6.011,0,0,1,41,41.48l17.93,29.03A2.8,2.8,0,0,0,63.7,67.565l-17.93-29.03a11.617,11.617,0,0,0-19.77,0L1.758,77.787a11.627,11.627,0,0,0,9.885,17.739H60.13a11.441,11.441,0,0,0,9.609-5.088A11.592,11.592,0,0,0,70.945,79.631Z" transform="translate(0 -33.02)" fill="#fc6b6b"></path><path id="Path_88" data-name="Path 88" d="M238.85,365.6a2.8,2.8,0,0,0,0-5.606h0a2.8,2.8,0,0,0,0,5.606Z" transform="translate(-202.962 -314.163)" fill="#fc6b6b"></path><path id="Path_89" data-name="Path 89" d="M241.648,166.415v-20.6a2.8,2.8,0,1,0-5.606,0v20.6a2.8,2.8,0,0,0,5.606,0Z" transform="translate(-202.958 -127.594)" fill="#fc6b6b"></path></g></g></g></svg><span>'+message+'</span><button type="button" name="close" class="close">إغلاق</button></form></div>';

const success = (message) => '<div class="widget success"><form><svg id="success" xmlns="http://www.w3.org/2000/svg" width="62.011" height="62.011" viewBox="0 0 62.011 62.011"><g id="Group_157" data-name="Group 157" transform="translate(14.724 7.791)"><g id="Group_156" data-name="Group 156"><path id="Path_85" data-name="Path 85" d="M167.082,65.014a2.337,2.337,0,0,0-3.3,0L135.74,92.973,125.624,81.986a2.337,2.337,0,0,0-3.439,3.166l11.763,12.775a2.334,2.334,0,0,0,1.669.753h.05a2.34,2.34,0,0,0,1.65-.682l29.759-29.681A2.337,2.337,0,0,0,167.082,65.014Z" transform="translate(-121.568 -64.327)" fill="#1c9dff"></path></g></g><g id="Group_159" data-name="Group 159"><g id="Group_158" data-name="Group 158"><path id="Path_86" data-name="Path 86" d="M59.674,28.668a2.337,2.337,0,0,0-2.337,2.337A26.331,26.331,0,1,1,31.005,4.674a2.337,2.337,0,1,0,0-4.674A31.005,31.005,0,1,0,62.011,31.005,2.337,2.337,0,0,0,59.674,28.668Z" fill="#1c9dff"></path></g></g></svg><span>'+message+'</span><button type="button" name="close" class="close">إغلاق</button></form></div>';

/* FUNCTIONS */
function removeWidgets()
{
  $(".widget").remove();
}

function hideWidgets()
{
  $(".widget").hide();
}

function showWidgets()
{
  $(".widget").show();
}

function removeLoader()
{
  $(".widget.loader").remove();
}

function addLoader()
{
  hideWidgets();
  $("body").prepend(loader);
}
