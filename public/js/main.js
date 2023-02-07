let postBtn = document.querySelector('.post-btn');
let categoryBtn = document.querySelector('.category-btn');
let iconPost = document.querySelector('.icon-post');
let togglerBtn = document.querySelector('.toggler-btn');
let togglerBtn2 = document.querySelector('.toggler-btn2');
let iconPost2 = document.querySelector('.icon-post2');
let statusBtn = true;

// document.querySelector("#addButton").addEventListener("click", ()=>{
//     document.querySelector("#task-save-btn").style.display = 'block';
//     document.querySelector("#task-update-btn").style.display = 'none';
// });

function deletePost(deleteType){


    if(deleteType == 1){
        if(confirm('Do you want To delete this Category : ') == true){
            document.querySelector("#buttonDeleteCategory").click();
            console.log("cattt");
        }

    }else{
        if(confirm('Do you want To delete this Post : ') == true){
            document.querySelector("#buttonDelete").click();
        }
    }
}


function editTask(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../../app/controller/post.contr.php',
        data: {openTask : id},
        success: function (obj) {
           let currentData = JSON.parse(obj);
           console.log(currentData[0]);
            document.getElementById('post-title').value                                      = currentData[0].title;
            document.getElementById('post-status').value                                     = currentData[0].category;
            document.getElementById('post-content').value                                    = currentData[0].content;

        }
    });

}

function editCategory(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../../app/controller/category.contr.php',
        data: {openCategory : id},
        success: function (obj) {
           let currentData = JSON.parse(obj);
           console.log(currentData[0]);
            document.getElementById('category-name').value                                      = currentData[0].category_name;

        }
    });

}

postBtn.style.display = 'block';
categoryBtn.style.display = 'block';
iconPost.style.display = 'none';
iconPost2.style.display = 'none';

togglerBtn.addEventListener("click", hideBtn);
togglerBtn2.addEventListener("click", hideBtn2);

togglerBtn2.style.display = 'none';

function hideBtn(){

        postBtn.style.display = 'none';
        categoryBtn.style.display = 'none';
        iconPost.style.display = 'block';
        iconPost2.style.display = 'block';

        togglerBtn.style.display = 'none';
        togglerBtn2.style.display = 'block';


}

function hideBtn2(){

    postBtn.style.display = 'block';
    categoryBtn.style.display = 'block';
    iconPost.style.display = 'none';
    iconPost2.style.display = 'none';

    togglerBtn2.style.display = 'none';
    togglerBtn.style.display = 'block';

}



