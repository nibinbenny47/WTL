const countdown=()=>{
    const countDate=new Date("March 20, 2022 00:00:00").getTime();
    const now= new Date().getTime(); //--current date and time
    const gap=countDate - now; //--gap between curent day and coming date----
//---find the value of sec,min,hour,day-----
    const second=1000;
    const minute=second * 60;
    const hour=minute * 60;
    const day=hour * 24;

    //calculate no of hours,days,min,sec within this gap----
    const textDay=Math.floor(gap / day);
    const textHour=Math.floor((gap % day) / hour);
    const textMinute=Math.floor((gap % hour) / minute);
    const textSecond=Math.floor((gap % minute) / second);
    document.querySelector(".day").innerText=textDay;
    document.querySelector(".hour").innerText=textHour;
    document.querySelector(".minute").innerText=textMinute;
    document.querySelector(".second").innerText=textSecond;
};
setInterval(countdown,1000);