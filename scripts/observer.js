const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add('homeAreas2TextA');
        
      }
      else{
        entry.target.classList.remove('homeAreas2TextA');
      }
      
    });
  });
  
  observer.observe(document.querySelector('.homeAreas2Text1'));
  observer.observe(document.querySelector('.homeAreas2Text2'));