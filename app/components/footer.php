<footer>
  <style>
    footer{
      margin-top: 4rem;
    }
    table * {
      border: 1px solid black;
    }
  </style>
  <table>
    <thead>
      <td>
        DEBUG
      </td>
    </thead>
    <tr>
      <td>
        SESSION - <?= var_dump($_SESSION) ?>
      </td>
    </tr>
    <tr>
      <td>
        POST - <?= var_dump($_POST) ?>
      </td>
    </tr>
  </table>
</footer>