const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        /*Aqui se especifica quien es el blanco de interes*/
        if(entry.target.classList.contains('homeAreas2Text') === true)
        {
            /*Aqui se pregunta si el blanco esta interceptando la vista*/
            if (entry.isIntersecting) {
                entry.target.classList.add('homeAreas2TextA');  
              }
              /*Aqui se elimina la clase agregada al salir de la vista*/ 
              else{
                entry.target.classList.remove('homeAreas2TextA');
              }
        }     
    });
  });
  /*Aqui se elige quienes son los elementos a observar. En este caso, hay dos con el mismo nombre por simplicidad, tomados como un array. De lo contrario, se pudo usar querySelector solamente, el cual retorna el primer elemento con el nombre pedido*/
  observer.observe(document.querySelectorAll('.homeAreas2Text')[0]);
  observer.observe(document.querySelectorAll('.homeAreas2Text')[1]);

