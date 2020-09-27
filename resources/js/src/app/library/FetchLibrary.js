export default {
  getApi: function (url) {
    return fetch(url, {
      method: "GET",
      headers: {
        'Accept': 'application/json',
      }
    });
  }
}
