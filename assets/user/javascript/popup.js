const notificationIcon = document.querySelector('.notification-icon');
const notificationBox = document.querySelector('.notification_box');
const accountIcon = document.querySelector('.account-icon');
const profileBox = document.querySelector('.profile_box');
let currentOpenPopup = null;

notificationIcon.addEventListener('click', (event) => {
    event.stopPropagation();
    
    if (currentOpenPopup && currentOpenPopup !== notificationBox) {
        closePopup(currentOpenPopup);
    }

    const isHidden = window.getComputedStyle(notificationBox).visibility === 'hidden';
    if (isHidden) {
        notificationBox.style.opacity = '1';
        notificationBox.style.visibility = 'visible';
        notificationBox.classList.add('bounce-in');
        currentOpenPopup = notificationBox;
    } else {
        closePopup(notificationBox);
    }
});

accountIcon.addEventListener('click', (event) => {
    event.stopPropagation();

    if (currentOpenPopup && currentOpenPopup !== profileBox) {
        closePopup(currentOpenPopup);
    }

    const isHidden = window.getComputedStyle(profileBox).visibility === 'hidden';
    if (isHidden) {
        profileBox.style.opacity = '1';
        profileBox.style.visibility = 'visible';
        profileBox.classList.add('bounce-in');
        currentOpenPopup = profileBox;
    } else {
        closePopup(profileBox);
    }
});

function closePopup(popup) {
    popup.style.opacity = '0';
    popup.style.visibility = 'hidden';
    popup.classList.remove('bounce-in');
    currentOpenPopup = null;
}

document.addEventListener('click', () => {
    if (currentOpenPopup) {
        closePopup(currentOpenPopup);
    }
});

profileBox.addEventListener('click', (event) => {
    event.stopPropagation();
});

notificationBox.addEventListener('click', (event) => {
    event.stopPropagation();
});

document.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 
        
        const url = link.getAttribute('href'); 

        window.location.assign(url);
    });
});




// document.getElementById('view-all-link').addEventListener('click', function(event) {
//     event.preventDefault(); 
//     const isViewingAll = this.innerText === 'View All';
    
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', `notification.php?view_all=${isViewingAll ? 'true' : 'false'}`, true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload = function() {
//         if (xhr.status === 200) {
//             const notifications = JSON.parse(xhr.responseText);
            
//             const notificationList = document.getElementById('notification-list');
//             notificationList.innerHTML = ''; 
            
//             notifications.forEach(function(notification) {
//                 const listItem = document.createElement('li');
//                 listItem.innerHTML = `<a href="#"><i class="fa fa-bell"></i><span>${notification}</span></a>`;
//                 notificationList.appendChild(listItem);
//             });
            
//             document.getElementById('view-all-link').innerText = isViewingAll ? 'View Less' : 'View All';
//         }
//     };
    
//     xhr.send();
// });
