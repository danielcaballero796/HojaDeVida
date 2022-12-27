function ingles() {

    //-----------campos input de contacto -----------//
    $("#name").val("Name");
    $("#mail").val("Mail");
    $("#phone").val("Phone");
    $("#website").val("Website");
    $("#message").val("Message");

    //-----------inicio de la pagina titulos rodeando foto-----------//
    let personalTitles = ["Developer", "Freelancer", "Teamwork"];

    //For Variable personalTitles
    for (let index = 0; index < personalTitles.length; index++) {
        num = (index + 1);
        document.getElementById("persontitle" + num).innerHTML = personalTitles[index];
    }

    //-----------inicio del menu de la pagina rodeando foto-----------//
    let menu = ["About Me", "Resume", "Services", "Portfolio", "Contact"];

    //For Variable menu
    for (let index = 0; index < menu.length; index++) {
        num = (index + 1);
        document.getElementById("menu" + num).innerHTML = menu[index];
    }

    //-----------Seccion Acerca de Mi-----------//
    let aboutMe = [
        "Basic Info About Me",
        "I am a person who has been characterized by being honest, responsible and sincere, I like to be dynamic and in a constant process of personal improvement hand in hand with clear objectives. I’m a System engineering student of the University Francisco of Paula Santander - Cúcuta, living in Colombia. Persistent, I am a fan of technology, web development and the english. I’m also interested in innovation and sports like the soccer and swimming. With great desire to put into practice all the activities and skills acquired during this time, I have various capacities such as adaptation, flexibility, teamwork and leadership.",
        "Name",
        "Age",
        "Hoobies",
        "26 Years",
        "Soccer and Crossfit",
        "Creative",
        "Friendly",
        "Listening Skills",
        "Winner",
        "Smart",
        "Powerful",
        "Helper",
        "TeamWork"
    ];

    //For Variable aboutMe
    for (let index = 0; index < aboutMe.length; index++) {
        num = (index + 1);
        document.getElementById("aboutMe" + num).innerHTML = aboutMe[index];
    }

    //-----------Seccion Resume-----------//
    let myResume = [
        "My Resume",
        "Education",
        "Tecnic Degree",
        "Completion of general secondary education with emphasis on data processing management.",
        "Higher University Education",
        "System Engineering.",
        "Experience",
        "Web Programmer",
        "OPS in the Systems Division.",
        "Web Programmer",
        "My Hobbies",
        "Gaming",
        "Travel",
        "Chat with Friends",
        "Listen Music",
        "Food",
        "Soccer",
        "My Skills",
        "Software Engineer",
        "2020 - Sep|Dec",
        "Norsoft S.A.S.",
        "2020 Dec - 2022 Jun",
        "Full-Stack Software Engineer",
        "Full-Stack Software Engineer at Universidad Francisco de Paula Santander.",
        "Full-time contract.",
        "2018 - Currently",
        "Freelancer",
        "Nortcoding",
        "Freelancer",
        "2020 Jan|Sep",
        "2021 Sep - 2022 Sep",
        "Freelancer",
        "Cámara de Comercio de Cúcuta",
        "Freelancer",
        "2022 Jun - Currently",
        "Current Work",
        "Development Analyst",
        "Full-time contract.",//38
    ];

    //For Variable aboutMe
    for (let index = 0; index < myResume.length; index++) {
        num = (index + 1);
        document.getElementById("myResume" + num).innerHTML = myResume[index];
    }

    //-----------Seccion Services-----------//
    let myServices = [
        "My Services",
        "I provide <b>high quality</b> services, which are listed below. Hope you will like them.",
        "Coding",
        "Analysis",
        "Web Design",
        "Work Process",
        "Design",
        "Develop",
        "Testing",
        "Publish"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myServices.length; index++) {
        num = (index + 1);
        document.getElementById("myServices" + num).innerHTML = myServices[index];
    }

    //-----------Seccion Portafolio-----------//
    let myPortfolio = [
        "Portfolio",
        "These is some of my works, look it.",
        "All"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myPortfolio.length; index++) {
        num = (index + 1);
        document.getElementById("myPortfolio" + num).innerHTML = myPortfolio[index];
    }

    //-----------Seccion Contact-----------//
    let myContact = [
        "Contact Me",
        "I'm available for freelancing. If you want something to be built or just to say hi, feel free to shoot me a message.",
        "Send Message"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myContact.length; index++) {
        num = (index + 1);
        document.getElementById("myContact" + num).innerHTML = myContact[index];
    }

}


//-------------------------------Parte en Español--------------------------------
function español() {

    //-----------campos input de contacto -----------//
    $("#name").val("Nombre");
    $("#mail").val("Correo");
    $("#phone").val("Telefono");
    $("#website").val("Sitio Web");
    $("#message").val("Mensaje");

    //-----------inicio de la pagina titulos rodeando foto-----------//
    let personalTitles = ["Desarrollador", "Independiente", "Trabajo en Equipo"];

    //For Variable personalTitles
    for (let index = 0; index < personalTitles.length; index++) {
        num = (index + 1);
        document.getElementById("persontitle" + num).innerHTML = personalTitles[index];
    }

    //-----------inicio del menu de la pagina rodeando foto-----------//
    let menu = ["Acerca de Mi", "Resumen", "Servicios", "Portafolio", "Contacto"];

    //For Variable menu
    for (let index = 0; index < menu.length; index++) {
        num = (index + 1);
        document.getElementById("menu" + num).innerHTML = menu[index];
    }

    //-----------Seccion Acerca de Mi-----------//
    let aboutMe = [
        "Información básica sobre mí",
        "Soy una persona que se ha caracterizado por ser honesta, responsable y sincera, me gusta ser dinámica y estar en un proceso constante de mejora personal de la mano de objetivos claros. Soy estudiante de Ingeniería de Sistemas de la Universidad Francisco de Paula Santander - Cúcuta, viviendo en Colombia. Persistente, soy un fanático de la tecnología, el desarrollo web y el inglés. También me interesa la innovación y los deportes como el fútbol y la natación. Con gran deseo de poner en práctica todas las actividades y habilidades adquiridas durante este tiempo, tengo varias capacidades como la adaptación, la flexibilidad, el trabajo en equipo y el liderazgo.",
        "Nombre",
        "Edad",
        "Pasatiempos",
        "26 Años",
        "Futbol y Crossfit",
        "Creativo",
        "Amigable",
        "Saber Escuchar",
        "Ganador",
        "Inteligente",
        "Potente",
        "Ayudante",
        "Trabajo en Equipo",

    ];

    //For Variable aboutMe
    for (let index = 0; index < aboutMe.length; index++) {
        num = (index + 1);
        document.getElementById("aboutMe" + num).innerHTML = aboutMe[index];
    }

    //-----------Seccion Resume-----------//
    let myResume = [
        "Resumen General",
        "Educación",
        "Grado Técnico",
        "Finalización de la secundaria general con énfasis en la gestión del procesamiento de datos.",
        "Educación Superior Universitaria",
        "Ingeniería de Sistemas.",
        "Experiencia",
        "Programador Web",
        "OPS en la División de Sistemas.",
        "Programador Web",
        "Mis Pasatiempos",
        "Jugar",
        "Viajar",
        "Hablar con amigos",
        "Escuchar Musica",
        "Comer",
        "Fútbol",
        "Mis Habilidades",
        "Ingeniero de software",
        "2020 - Sep|Dic",
        "Norsoft S.A.S.",
        "2020 Dic - 2022 Jun",
        "Ingeniero de software Full-Stack",
        "Ingeniero de software Full-Stack en Universidad Francisco de Paula Santander",
        "Contrato Tiempo Completo", 
        "2018 - Actualmente",
        "Independiente",
        "Nortcoding",
        "Independiente", 
        "2020 Ene|Sep",
        "2021 Sep - 2022 Sep",
        "Independiente",
        "Cámara de Comercio de Cúcuta",
        "Independiente",
        "2022 Jun - Actualmente",
        "Trabajo Actual",
        "Analista de Desarrollo",
        "Contrato Tiempo Completo",//38
    ];

    //For Variable aboutMe
    for (let index = 0; index < myResume.length; index++) {
        num = (index + 1);
        document.getElementById("myResume" + num).innerHTML = myResume[index];
    }

    //-----------Seccion Services-----------//
    let myServices = [
        "Mis Servicios",
        "Proporciono <b>servicios de alta calidad,</b> los cuales se enumeran a continuación. Espero que le gusten.",
        "Codificación",
        "Analisís",
        "Diseño Web",
        "Proceso de trabajo",
        "Diseño",
        "Desarrollo",
        "Prueba",
        "Publicación"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myServices.length; index++) {
        num = (index + 1);
        document.getElementById("myServices" + num).innerHTML = myServices[index];
    }

    //-----------Seccion Portafolio-----------//
    let myPortfolio = [
        "Portafolio",
        "Estos son algunos de mis trabajos, míralos.",
        "Todos"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myPortfolio.length; index++) {
        num = (index + 1);
        document.getElementById("myPortfolio" + num).innerHTML = myPortfolio[index];
    }

    //-----------Seccion Contact-----------//
    let myContact = [
        "Contactame",
        "Estoy disponible para trabajar por cuenta propia. Si quieres que construya algo no dudes en contactarme, siéntete libre de enviarme un mensaje.",
        "Enviar Mensaje"
    ];

    //For Variable aboutMe
    for (let index = 0; index < myContact.length; index++) {
        num = (index + 1);
        document.getElementById("myContact" + num).innerHTML = myContact[index];
    }

}