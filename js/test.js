const test_class = document.querySelector('.test_class');

fetch('https://reqres.in/api/users?page=2')
  .then(response => response.json())
  .then(updateHTML);

function updateHTML(data) {
  const json = JSON.stringify(data, null, 2);
  const html = `<pre><code>${json}</code></pre>`;
  output.insertAdjacentHTML('beforeend', html);
}