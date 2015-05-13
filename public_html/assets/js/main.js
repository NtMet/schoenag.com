/**
 * Created by Tiziano on 08.05.14.
 */

/**
 *
 * @param id
 * @returns HTMLElement
 * @private
 */
function _(id) {
    return document.getElementById(id);
}
/**
 *
 * @returns {boolean}
 */
function validateInput() {
    var email =  document.forms["validate"]["email"].value;
    var FirstName = document.forms["validate"]["firstName"].value;
    var name = document.forms["validate"]["name"].value;
    if(name == '') {
        alert("Could you please fill in The form correctly. Thanks.");
    }
    if(FirstName == '') {
        alert("Could you please fill in The form correctly. Thanks.");
    }
    alert("Thank you for you'r request.");

//    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//    if(re.test(email)) {
//        return alert('goggo');
//    }

}

function showImage(imgName) {
    var curImage = document.getElementById('currentImg');
    var thePath = 'img/';
    curImage.src = thePath + imgName;
    curImage.alt = imgName;
    curImage.title = imgName;
}


