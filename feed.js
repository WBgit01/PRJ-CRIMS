  // This function will later fetch Facebook posts using a backend API
  async function fetchFacebookNews() {
    try {
      // Example: you'll eventually call your backend API here
      // const response = await fetch('/api/facebook/posts');
      // const posts = await response.json();

      // Temporary simulation data (for now)
      const posts = [
        {
          type: 'post',
          embed: 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCNNPhilippines%2Fposts%2F10161152768405023&width=500'
        },
        {
          type: 'live',
          embed: 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCNNPhilippines%2Fvideos%2F10155819856312373&show_text=false&autoplay=0'
        }
      ];

      const newsFeed = document.getElementById('news-feed');
      newsFeed.innerHTML = ''; // Clear any previous content

      posts.forEach(post => {
        const col = document.createElement('div');
        col.className = 'col-md-6';

        const iframe = document.createElement('iframe');
        iframe.src = post.embed;
        iframe.width = '100%';
        iframe.height = '430';
        iframe.style.border = 'none';
        iframe.setAttribute('scrolling', 'no');
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allowfullscreen', 'true');

        col.appendChild(iframe);
        newsFeed.appendChild(col);
      });
    } catch (err) {
      console.error('Error loading Facebook posts:', err);
    }
  }

  // Simulate fetching on page load
  document.addEventListener('DOMContentLoaded', fetchFacebookNews);