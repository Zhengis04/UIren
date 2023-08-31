// creating an array and passing the number, questions, options, and answers
var audio = new Audio('missing-halloween-.mp3');
let questions = [
    {
    numb: 1,
    question: "Иелік мәнін білдіріп тұрған сөзді табыңыз: <br> Менің пәтерім екінші қабатта орналасқан.",
    answer: "екінші",
    options: [
      "екінші",
      "қабатта",
      "пәтерім",
      "орналасқан"
    ]
  },
    {
    numb: 2,
    question: "Сөйлемді толықтырыңыз: <br>Менің досым бүгін бастықтың ... жазылмақшы.",
    answer: "қабылдауына",
    options: [
      "қабылдау",
      "қабылдауы",
      "қабылдауында",
      "қабылдауына"
    ]
  },
    {
    numb: 3,
    question: "Сөйлемді аяқтаңыз:<br>Тауарларды жеткізу мәселесін шешу жөнінде менеджермен ... .",
    answer: "ақылдасыңыз",
    options: [
      "қолдаңыз",
      "ақылдасыңыз",
      "ұсыныс жасаңыз",
      "баяндама жасаңыз"
    ]
  },
    {
    numb: 4,
    question: "Адамның қалауын білдіретін сөйлемді көрсетіңіз.",
    answer: "Жүргізілген реформалардың нәтижесін көргіміз келеді.",
    options: [
      "Нәтиже жақсы болу үшін реформа жүргізу керек.",
      "Жүргізілген реформалардың нәтижесін көріңіздер.",
      "Жүргізілген реформалар жақсы нәтиже беретін шығар.",
      "Жүргізілген реформалардың нәтижесін көргіміз келеді."
    ]
  },
    {
    numb: 5,
    question: "Қажетті сөзді қойыңыз.<br>Бұл жоба өзі керек пе, ... мүлде қажет емес пе, соны түсініп алайық.",
    answer: "әлде",
    options: [
      "кейде",
      "әлде",
      "біресе",
      "мейлі"
    ]
  },


  // you can uncomment the below codes and make duplicate as more as you want to add question
  // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];