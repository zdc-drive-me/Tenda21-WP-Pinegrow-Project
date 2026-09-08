(() => {
  const images = document.querySelectorAll('.space-gallery-image');
  if (!images.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        el.classList.remove('opacity-0', 'scale-[0.985]');
        el.classList.add('opacity-100', 'scale-100');
        observer.unobserve(el);
      });
    },
    { threshold: 0.15 }
  );

  images.forEach((el) => {
    el.classList.remove('opacity-100', 'scale-100');
    el.classList.add('opacity-0', 'scale-[0.985]');
    observer.observe(el);
  });
})();
