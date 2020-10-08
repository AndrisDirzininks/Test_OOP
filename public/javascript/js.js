// using DOM to handle the input fields
// Get the type switcher select tag
const selectElement = document.getElementById('type');
// add event handler method - when new value is selected in the select box run a function
selectElement.addEventListener('change', genForm);
// the function changes pages existing tags attributes - from hidden to visible and others..
function genForm(event){
    // get the type value that has been selected
    var value = event.target.value;
    // get the list tags
    var id1=document.getElementById("_size");
    var id2=document.getElementById("_weight");
    var id3=document.getElementById("_dimensions");
    // get the input tags
    var in1=document.getElementById("size");
    var in2=document.getElementById("weight");
    var in3_1=document.getElementById("height");
    var in3_2=document.getElementById("width");
    var in3_3=document.getElementById("length");
    // apply different actions when different values are selected
    switch (value) {
        case 'Size':
            // mark other input fields (for Books and Dimensions) invisible
            id3.className = "d-none";
            id2.className = "d-none";
            // mark the existing input fields for selected type visible
            id1.className="list-group-item border-0 p-1 bg-light";
            // manage required attributes so the form can submit 
            in1.setAttribute("required", "");
            in2.removeAttribute("required");
            in3_1.removeAttribute("required");
            in3_2.removeAttribute("required");
            in3_3.removeAttribute("required");
        break;
        case 'Weight':
            // mark other input fields (for DVDs and Dimensions) invisible
            id1.className = "d-none";
            id3.className = "d-none";
            // mark the existing input fields for selected type visible
            id2.className = "list-group-item border-0 p-1 bg-light";
            // manage required attributes so the form can submit 
            in2.setAttribute("required", "");
            in1.removeAttribute("required");
            in3_1.removeAttribute("required");
            in3_2.removeAttribute("required");
            in3_3.removeAttribute("required");    
        break;
        case 'Dimensions':
            // mark other input fields (for DVDs and Books) invisible
            id1.className="d-none";
            id2.className="d-none";
            // mark the existing input fields for selected type visible
            id3.className = "list-group-item border-0 p-1 bg-light";
            // manage required attributes so the form can submit 
            in3_1.setAttribute("required", "");
            in3_2.setAttribute("required", "");
            in3_3.setAttribute("required", "");
            in1.removeAttribute("required");
            in2.removeAttribute("required");
        break;
        case '':
            // if no type is selected, hide all fields
            id1.className="d-none";
            id2.className="d-none";
            id3.className = "d-none";
        break;
    }
}
