const changeUserBtn=document.querySelectorAll('.change_user');
const deleteUserBtn=document.querySelectorAll('.delete_user');

const addPostBtn=document.querySelector('.add_post');
const removePostBtn=document.querySelectorAll('.delete_post');


function sendAjax(url, data){
  const request= new XMLHttpRequest();
  request.open('POST',url, true);
  request.responseType = 'json';
  request.setRequestHeader("Content-Type","application/json");
  request.send(JSON.stringify(data));
}


function deleteUser(e){
  const currentBtn=e.currentTarget;
  const blockData=currentBtn.parentNode.childNodes;
  const id=blockData[1].textContent;

  sendAjax('./usersWork/removeUser.php',{id})
}

function changeUser(e){
  const currentBtn=e.currentTarget;
  const blockData=currentBtn.parentNode.childNodes;
  const id=blockData[1].textContent;
  const login=blockData[3].textContent;
  const roll=blockData[5].textContent;

  sendAjax('./usersWork/changeUser.php',{id,login,roll})
}

function addPost(){
  const writer=prompt("Введите автора");
  const content=prompt("Введите содержание поста");
  const date=new Date();
  const time=`${date.getHours}:${date.getMinutes}`;

  sendAjax('./postWork/addPost.php',{writer, content, time})
}

function deletePost(e){
  const currentBtn=e.currentTarget;
  const postId=currentBtn.parentNode.getAttribute('id');

  sendAjax('./postWork/removePost.php',{postId})
}

changeUserBtn.forEach(btn => {
  btn.addEventListener('click',(e)=>changeUser(e))
});
deleteUserBtn.forEach(btn => {
  btn.addEventListener('click',(e)=>deleteUser(e))
});
removePostBtn.forEach(btn => {
  btn.addEventListener('click',(e)=>deletePost(e))
});

addPostBtn.addEventListener('click', ()=>addPost())

