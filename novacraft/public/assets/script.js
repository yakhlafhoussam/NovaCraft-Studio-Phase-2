let pageselect = document.querySelector("#page").dataset.name;
let user;
let email;
let msg;
let emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;


if (pageselect == "/") {
    document.querySelector("#home").classList.add("border-b-2")
    document.querySelector("#home").classList.remove("hover:scale-105")
    console.log(pageselect);
    document.addEventListener("DOMContentLoaded", event => {
        gsap.from(".sun", {
            duration: 1,
            y: -30,
            opacity: 0,
            onComplete: () => {
                gsap.to(".moon", {
                    duration: 2,
                    opacity: 1,
                });
            }
        });
    })
} else if (pageselect == "/services") {
    document.querySelector("#services").classList.add("border-b-2")
    document.querySelector("#services").classList.remove("hover:scale-105")
    console.log(pageselect);
} else if (pageselect == "/about") {
    document.querySelector("#about").classList.add("border-b-2")
    document.querySelector("#about").classList.remove("hover:scale-105")
    console.log(pageselect);
} else if (pageselect == "/contact") {
    user = document.querySelector("#name");
    email = document.querySelector("#email");
    msg = document.querySelector("#msg");
    document.querySelector("#contact").classList.add("border-b-2")
    document.querySelector("#contact").classList.remove("hover:scale-105")
    console.log(pageselect);
    document.querySelector("#send").onclick = function () {
        if (user.value == "" || email.value == "" || !emailRegex.test(email.value) || msg.value == "") {
            gsap.to(document.querySelector("#toast0"), {
                x: 330,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast0"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast0"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
            if (user.value == "") {
                user.classList.add("border-red-600");
                gsap.to(user, {
                    x: 3,
                    duration: 0.05,
                    yoyo: true,
                    repeat: 3,
                });
            } else {
                user.classList.remove("border-red-600");
            }
            if (email.value == "" || !emailRegex.test(email.value)) {
                email.classList.add("border-red-600");
                gsap.to(email, {
                    x: 3,
                    duration: 0.05,
                    yoyo: true,
                    repeat: 3,
                });
            } else {
                email.classList.remove("border-red-600");
            }
            if (msg.value == "") {
                msg.classList.add("border-red-600");
                gsap.to(msg, {
                    x: 3,
                    duration: 0.05,
                    yoyo: true,
                    repeat: 3,
                });
            } else {
                msg.classList.remove("border-red-600");
            }
        } else {
            user.value = "";
            email.value = "";
            msg.value = "";
            user.classList.remove("border-red-600");
            email.classList.remove("border-red-600");
            msg.classList.remove("border-red-600");
            gsap.to(document.querySelector("#toast"), {
                x: 330,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
        }
    }
} else if (pageselect == "/register") {
    let check = document.querySelector("#check");
    console.log(pageselect);
    if (check.dataset.name == 'error') {
        gsap.to(document.querySelector("#toast0"), {
            x: 330,
            duration: 0.25,
            onComplete: () => {
                gsap.to(document.querySelector("#toast0"), {
                    delay: 2,
                    duration: 2,
                    opacity: 0,
                    onComplete: () => {
                        gsap.to(document.querySelector("#toast0"), {
                            duration: 0,
                            x: -330,
                            opacity: 1,
                        });
                    }
                });
            }
        });
    } else if (check.dataset.name == 'done') {
        document.querySelector("#send").style.display = "none";
        let input = document.querySelectorAll(".trunoff");
        input = Array.from(input);
        for (let index = 0; index < input.length; index++) {
            input[index].disabled = "true";
        }
        gsap.to(document.querySelector("#toast"), {
            x: 330,
            duration: 0.25,
            onComplete: () => {
                gsap.to(document.querySelector("#toast"), {
                    delay: 2,
                    duration: 2,
                    opacity: 0,
                    onComplete: () => {
                        gsap.to(document.querySelector("#toast"), {
                            duration: 0,
                            x: -330,
                            opacity: 1,
                        });
                    }
                });
            }
        });
        setTimeout(() => {
            document.querySelector("#tologin").click();
        }, 3000);
    }
}