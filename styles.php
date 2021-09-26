<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  }

  body {
    padding-bottom: 32px;
  }

  .nav {
    width: 100%;
    height: 50px;
    background-color: #4dceeb;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  }

  .nav-item {
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    text-decoration: none;
  }
  .main {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .form {
    width: 90%;
    max-width: 500px;
    margin-top: 32px;
    padding: 15px 30px 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 8px;
    background-color: #bfbfbf;
  }

  .form-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 16px;
  }

  .input-classic {
    width: 100%;
    height: 35px;
    margin-top: 12px;
    padding-left: 8px;
    border: none;
    border-radius: 4px;
  }

  .input-classic:focus {
    outline: none;
    border: 1.5px solid #000;
  }

  .select {
    width: 100%;
    height: 30px;
    margin-top: 12px;
    border: none;
    border-radius: 4px;
  }

  .select:focus {
    outline: none;
    border: 1.5px solid #000;
  }

  .form-btn {
    width: 150px;
    height: 40px;
    margin-top: 20px;
    border: none;
    border-radius: 4px;
    background-color: #5b6ff0;
    color: #fff;
    font-size: 16px;
  }

  .form-btn:hover {
    cursor: pointer;
  }

  .gen-nom {
    display: flex;
    align-items: center;
    margin-top: 32px;
  }

  .gen-nom-title {
    font-size: 16px;
    line-height: 32px;
    font-weight: 600;
    margin-right: 12px;
  }

  .gen-nom-select {
    height: 30px;
    margin-right: 8px;
  }

  .gen-nom-btn {
    width: 130px;
    height: 30px;
    border: none;
    border-radius: 4px;
    background-color: #6a4deb;
    color: #fff;
  }

  .gen-nom-btn:hover {
    cursor: pointer;
  }

  .nom-title {
    margin-top: 24px;
  }

  .nom-tab {
    width: 90%;
    max-width: 800px;
    margin-top: 12px;
    text-align: center;
  }

  .nom-tab-header {
    background-color: #6a4deb;
    color: #fff;
  }

  .nom-tab th {
    margin: 0 12px;
  }

  .nom-tab tr {
    margin: 0 12px;
  }

  .nom-tab td {
    margin-top: 4px;
  }

  .updt-btn {
    margin-right: 8px;
    color: #de931b;
    text-decoration: none;
  }

  .del-btn {
    color: #de1b25;
    text-decoration: none;
  }

  .message {
    width: 250px;
    height: 65px;
    margin-top: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    background-color: #e81e94;
    color: #fff;
    border-radius: 8px;
  }
</style>
