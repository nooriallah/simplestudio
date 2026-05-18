import './bootstrap';



// Projects section design
document.querySelectorAll('.project__wrapper').forEach(wrapper => {
    const projects = wrapper.querySelectorAll('.small__project, .big__project');

    projects.forEach(project => {
        project.addEventListener('mouseenter', () => {
            projects.forEach(p => {
                if (p === project) {
                    p.style.flexBasis = '70%';
                } else {
                    p.style.flexBasis = '30%';
                }
            });
        });
    });
});