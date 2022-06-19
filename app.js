
// Button Logic 
const submitButton = document.querySelector('.submit-button');
const expButton = document.querySelector('.experience-button');
const educationButton = document.querySelector('.education-button');
const hobbyButton = document.querySelector('.hobbies-btn');
const skillButton = document.querySelector('.skill-btn');

var skillCount=1;
var eduCount=1;
var expCount=1;
var hobbyCount=1;

function skillFunc(){

    let addSkill = document.getElementById('addSkill');
    
    if(skillCount<5)
    {
        skillCount++;

        var field = 

        `<div class="container skills-content-container content">
            <label for="skill${skillCount}">Skill Name</label>
            <input type="text" class="skill${skillCount}" name="skill${skillCount}" id="skill${skillCount}">
            <select class="form-select form-select-lg mb-3 skill-level${skillCount}" name="skill-level${skillCount}">
                <option value="">Select stars based upon your skill level</option>
                <option value="1">1 - Novice</option>
                <option value="2">2 - Advanced Beginner</option>
                <option value="3">3 - Competent</option>
                <option value="4">4 - Proficient</option>
                <option value="5">5 - Expert</option>
            </select>
        </div>`;
        
        console.log(field);
        var htmlObject = document.createElement('div');

        htmlObject.innerHTML = field;
        addSkill.insertAdjacentElement("beforeend", htmlObject);
    }
    if(skillCount==5)
    {
        skillButton.style = "display:none";
    }
    

}

hobbyButton.addEventListener('click',function(){


    let addHobby = document.getElementById('addHobby');

    if(hobbyCount<4)
    {
        ++hobbyCount;
        var field = 
        `<div class="container hobbies-content-container content">
            <label for="hobby${hobbyCount}">Hobby</label>
            <input type="text" name="hobby${hobbyCount}" class="">
        </div>`;

        
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addHobby.insertAdjacentElement("beforeend", htmlObject);
    }
    if(hobbyCount==4)
    {
        hobbyButton.style = "display:none";
    }

});

educationButton.addEventListener('click',function(){

    let addEducation = document.getElementById('addEducation');
    
    if(eduCount<3)
    {
        ++eduCount;
        var field = 
        `
        <div class="container content education-content-container">
        <div class="container content education-content-container">
        <label for="exampleInputEmail1">
            School/College/University
        </label>
        <input type="text" name="school-name${eduCount}" id="school-name${eduCount}">
    
    </div>
    <div class="container content education-content-container">
        <label for="exampleInputEmail1">Degree Name</label>
        <input type="text" name="degree${eduCount}" id="degree${eduCount}" >
    </div>
    <div class="container education-content-container">
        <div class="row">
            <div class="col-md content">
                <label for="exampleInputEmail1">From</label>
                <input type="text" name="from${eduCount}" id="from${eduCount}" >
            </div>
            <div class="col content"></div>
            <div class="col-md content">
                <label for="exampleInputEmail1">To</label>
                <input type="text" name="to${eduCount}" id="to${eduCount}" >
            </div>
        </div>
    </div>
    <div class="container content education-content-container">
        <label for="exampleInputEmail1">Grade/Score/CGPA</label><br>
        <input type="text" name="grade${eduCount}" id="grade${eduCount}" >
    </div>
    </div>
    `;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addEducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(eduCount==3)
    {
        educationButton.style = "display:none";
    }
    
    

});


expButton.addEventListener('click',function(){

        let addExperience = document.getElementById('addExperience');
        
        if(expCount<3)
        {
            ++expCount;
            var field = 
            `
            <div class="container experience-content-container content">
                        <div>
            <div class="container experience-content-container content">
                                  <label for="titlexampleInputEmail1e">Title</label>
                                   <input type="text" name="title${expCount}" id="title${expCount}"> 
                                </div>
                                <div class="container experience-content-container content">
                                    <label for="exampleInputEmail1">Description</label><br>
                                    <input type="text" name="description${expCount}" id="description${expCount}"> 
                                </div>
                                
                        </div></div>`;
            var htmlObject = document.createElement('div');
            htmlObject.innerHTML=field;
            addExperience.insertAdjacentElement("beforeend", htmlObject);
        }
        if(expCount==3)
        {
            expButton.style = "display:none";
        }
});


function toggleTheme(){
    var themeSelect = document.getElementById("theme");

    if(themeSelect.getAttribute('href') == "dark.css")
    {
        themeSelect.setAttribute('href','light.css');
    }
    else
    {
        themeSelect.setAttribute('href','dark.css');
    }

}