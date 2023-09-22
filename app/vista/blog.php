<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
    main {
  min-width: 290px;
  color: #4d4e53;
  background-color: #ffffff;
  font-family: 'Open Sans', Arial, sans-serif;
  line-height: 1.5;
}

#navbar {
  position: fixed;
  min-width: 290px;
  top: 55px;
  left: 0px;
  width: 300px;
  height: 100%;
  border-right: solid;
  border-color: rgba(0, 22, 22, 0.4);
}

header {
  color: black;
  margin: 10px;
  text-align: center;
  font-size: 1.8em;
  font-weight: thin;
}

#main-doc header {
  text-align: left;
  margin: 0px;
  top: 55px;
}

#navbar ul {
  height: 88%;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}

#navbar li {
  color: #4d4e53;
  border-top: 1px solid;
  list-style: none;
  position: relative;
  width: 100%;
}

#navbar a {
  display: block;
  padding: 10px 30px;
  color: #4d4e53;
  text-decoration: none;
  cursor: pointer;
}

#main-doc {
  position: absolute;
  margin-left: 310px;
  padding: 20px;
  margin-bottom: 110px;
  margin-top: 55px;
}

section article {
  color: #4d4e53;
  margin: 15px;
  font-size: 0.96em;
}

section li {
  margin: 15px 0px 0px 20px;
}

code {
  display: block;
  text-align: left;
  white-space: pre-line;
  position: relative;
  word-break: normal;
  word-wrap: normal;
  line-height: 2;
  background-color: #f7f7f7;
  padding: 15px;
  margin: 10px;
  border-radius: 5px;
}

@media only screen and (max-width: 815px) {
  /* For mobile phones: */
  #navbar ul {
    border: 1px solid;
    height: 207px;
  }

  #navbar {
    background-color: white;
    position: absolute;
    top: 0;
    padding: 0;
    margin: 0;
    width: 100%;
    max-height: 275px;
    border: none;
    z-index: 1;
    border-bottom: 2px solid;
  }

  #main-doc {
    position: relative;
    margin-left: 0px;
    margin-top: 270px;
  }
}

@media only screen and (max-width: 400px) {
  #main-doc {
    margin-left: -10px;
  }

  code {
    margin-left: -20px;
    width: 100%;
    padding: 15px;
    padding-left: 10px;
    padding-right: 45px;
    min-width: 233px;
  }
}
</style>
<body>
    <div>
        <nav class="navbar bg-primary navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">CONMED</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="citas.php">Agenda de citas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <!--<a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown link</a>-->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <nav id="navbar">
      <header>Recomendaciones de salud</header>
      <ul>
        <li><a class="nav-link" href="#Introduction">Introduccion</a></li>
        <li>
          <a class="nav-link" href="#What_you_should_already_know"
            >Resfriado común</a
          >
        </li>
        <li>
          <a class="nav-link" href="#JavaScript_and_Java"
            >Recomendaciones de salud</a
          >
        </li>
        <li><a class="nav-link" href="#Hello_world">Bronquitis aguda</a></li>
        <li><a class="nav-link" href="#Variables">a</a></li>
        <li>
          <a class="nav-link" href="#Declaring_variables"
            >a</a
          >
        </li>
        <li><a class="nav-link" href="#Variable_scope">a</a></li>
        <li>
          <a class="nav-link" href="#Global_variables">a</a>
        </li>
        <li><a class="nav-link" href="#Constants">a</a></li>
        <li><a class="nav-link" href="#Data_types">a</a></li>
        <li>
          <a class="nav-link" href="#if...else_statement"
            >a</a
          >
        </li>
        <li>a<a class="nav-link" href="#while_statement"></a></li>
        <li>
          <a class="nav-link" href="#Function_declarations"
            >a</a
          >
        </li>
        <li><a class="nav-link" href="#Reference">a</a></li>
      </ul>
    </nav>
    <main id="main-doc">
      <section class="main-section" id="Introduction">
        <header>Introduccion</header>
        <article>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, ab mollitia? Eius sunt reprehenderit reiciendis porro! Veniam neque voluptatem ullam numquam dolorem iure non vel porro aliquid? Perspiciatis voluptate accusamus, deleniti debitis tenetur sapiente vitae voluptatum praesentium optio dolorem, exercitationem velit veritatis, molestiae qui modi dolore nihil eveniet reprehenderit sint? Atque, reprehenderit. Animi ipsa, debitis facilis laboriosam veniam magni, sapiente sequi alias tenetur distinctio unde. Unde voluptate illo nihil ducimus. Sed pariatur optio assumenda porro error sit reiciendis, quod numquam harum qui labore totam excepturi sequi neque cum eligendi id nostrum doloribus voluptas delectus corrupti. Libero deserunt atque obcaecati modi!
          </p>
        </article>
      </section>
      <section class="main-section" id="What_you_should_already_know">
        <header>Bronquitis aguda</header>
        <article>
          <p>La bronquitis aguda, a veces también llamada resfriado de pecho, ocurre cuando las vías respiratorias en el pulmón se inflaman y producen mucosidad en los pulmones. Eso es lo que lo hace toser. La bronquitis aguda puede durar menos de 3 semanas.</p>

          <ul>
            <li>
              Causas: La bronquitis aguda, a veces también llamada resfriado de pecho, ocurre cuando las vías respiratorias en el pulmón se inflaman y producen mucosidad en los pulmones. Eso es lo que lo hace toser. La bronquitis aguda puede durar menos de 3 semanas.
            </li>
            <li>Tratamiento: Por lo general, la bronquitis aguda mejora por sí sola, sin antibióticos. Los antibióticos no lo ayudarán a mejorar si usted tiene bronquitis aguda.
            </li>
          </ul>
        </article>
      </section>
      <section class="main-section" id="JavaScript_and_Java">
        <header>Resfriado común</header>
        <article>
          <p>
          ¿Tiene estornudos, congestión nasal y moqueo? Podría ser un resfriado. Los resfriados son una de las razones más frecuentes de ausencias escolares y laborales. Cada año, los adultos tienen un promedio de 2 a 3 resfriados y los niños tienen aún más.
          </p>
          <p>
           Causas: Más de 200 virus pueden causar un resfriado, pero los rinovirus son el tipo más común. Los virus que causan los resfriados se pueden transmitir de persona a persona a través del aire y del contacto personal cercano.
          </p>
        </article>
      </section>
      <section class="main-section" id="Hello_world">
        <header>Infección de oído</header>
        <article>
        ¿Le duele el oído a su hijo? Podría ser una infección de oído. Los niños tienen más probabilidades que los adultos de contraer infecciones de oído. Hable con el médico de su hijo acerca de cuál es el mejor tratamiento.
        </article>
      </section>
      <section class="main-section" id="Variables">
        <header>Variables</header>
        <p>
          You use variables as symbolic names for values in your application.
          The names of variables, called identifiers, conform to certain rules.
        </p>
        <p>
          A JavaScript identifier must start with a letter, underscore (_), or
          dollar sign ($); subsequent characters can also be digits (0-9).
          Because JavaScript is case sensitive, letters include the characters
          "A" through "Z" (uppercase) and the characters "a" through "z"
          (lowercase).
        </p>
        <p>
          You can use ISO 8859-1 or Unicode letters such as å and ü in
          identifiers. You can also use the Unicode escape sequences as
          characters in identifiers. Some examples of legal names are
          Number_hits, temp99, and _name.
        </p>
      </section>
      <section class="main-section" id="Declaring_variables">
        <header>Declaring variables</header>
        <article>
          You can declare a variable in three ways:
          <p>
            With the keyword var. For example, <code>var x = 42.</code> This
            syntax can be used to declare both local and global variables.
          </p>
          <p>
            By simply assigning it a value. For example,
            <code>x = 42.</code> This always declares a global variable. It
            generates a strict JavaScript warning. You shouldn't use this
            variant.
          </p>
          <p>
            With the keyword let. For example,<code> let y = 13.</code> This
            syntax can be used to declare a block scope local variable. See
            Variable scope below.
          </p>
        </article>
      </section>
      <section class="main-section" id="Variable_scope">
        <header>Variable scope</header>
        <article>
          <p>
            When you declare a variable outside of any function, it is called a
            global variable, because it is available to any other code in the
            current document. When you declare a variable within a function, it
            is called a local variable, because it is available only within that
            function.
          </p>

          <p>
            JavaScript before ECMAScript 2015 does not have block statement
            scope; rather, a variable declared within a block is local to the
            function (or global scope) that the block resides within. For
            example the following code will log 5, because the scope of x is the
            function (or global context) within which x is declared, not the
            block, which in this case is an if statement.
          </p>
          <code>if (true) { var x = 5; } console.log(x); // 5</code>
          <p>
            This behavior changes, when using the let declaration introduced in
            ECMAScript 2015.
          </p>

          <code
            >if (true) { let y = 5; } console.log(y); // ReferenceError: y is
            not defined</code
          >
        </article>
      </section>
      <section class="main-section" id="Global_variables">
        <header>Global variables</header>
        <article>
          <p>
            Global variables are in fact properties of the global object. In web
            pages the global object is window, so you can set and access global
            variables using the window.variable syntax.
          </p>

          <p>
            Consequently, you can access global variables declared in one window
            or frame from another window or frame by specifying the window or
            frame name. For example, if a variable called phoneNumber is
            declared in a document, you can refer to this variable from an
            iframe as parent.phoneNumber.
          </p>
        </article>
      </section>
      <section class="main-section" id="Constants">
        <header>Constants</header>
        <article>
          <p>
            You can create a read-only, named constant with the const keyword.
            The syntax of a constant identifier is the same as for a variable
            identifier: it must start with a letter, underscore or dollar sign
            and can contain alphabetic, numeric, or underscore characters.
          </p>

          <code>const PI = 3.14;</code>
          <p>
            A constant cannot change value through assignment or be re-declared
            while the script is running. It has to be initialized to a value.
          </p>

          <p>
            The scope rules for constants are the same as those for let block
            scope variables. If the const keyword is omitted, the identifier is
            assumed to represent a variable.
          </p>

          <p>
            You cannot declare a constant with the same name as a function or
            variable in the same scope. For example:
          </p>

          <code
            >// THIS WILL CAUSE AN ERROR function f() {}; const f = 5; // THIS
            WILL CAUSE AN ERROR ALSO function f() { const g = 5; var g;
            //statements }</code
          >
          However, object attributes are not protected, so the following
          statement is executed without problems.
          <code
            >const MY_OBJECT = {"key": "value"}; MY_OBJECT.key =
            "otherValue";</code
          >
        </article>
      </section>
      <section class="main-section" id="Data_types">
        <header>Data types</header>
        <article>
          <p>The latest ECMAScript standard defines seven data types:</p>
          <ul>
            <li>
              <p>Six data types that are primitives:</p>
              <ul>
                <li>Boolean. true and false.</li>
                <li>
                  null. A special keyword denoting a null value. Because
                  JavaScript is case-sensitive, null is not the same as Null,
                  NULL, or any other variant.
                </li>
                <li>
                  undefined. A top-level property whose value is undefined.
                </li>
                <li>Number. 42 or 3.14159.</li>
                <li>String. "Howdy"</li>
                <li>
                  Symbol (new in ECMAScript 2015). A data type whose instances
                  are unique and immutable.
                </li>
              </ul>
            </li>

            <li>and Object</li>
          </ul>
          Although these data types are a relatively small amount, they enable
          you to perform useful functions with your applications. Objects and
          functions are the other fundamental elements in the language. You can
          think of objects as named containers for values, and functions as
          procedures that your application can perform.
        </article>
      </section>
      <section class="main-section" id="if...else_statement">
        <header>if...else statement</header>
        <article>
          Use the if statement to execute a statement if a logical condition is
          true. Use the optional else clause to execute a statement if the
          condition is false. An if statement looks as follows:

          <code>if (condition) { statement_1; } else { statement_2; }</code>
          condition can be any expression that evaluates to true or false. See
          Boolean for an explanation of what evaluates to true and false. If
          condition evaluates to true, statement_1 is executed; otherwise,
          statement_2 is executed. statement_1 and statement_2 can be any
          statement, including further nested if statements.
          <p>
            You may also compound the statements using else if to have multiple
            conditions tested in sequence, as follows:
          </p>
          <code
            >if (condition_1) { statement_1; } else if (condition_2) {
            statement_2; } else if (condition_n) { statement_n; } else {
            statement_last; }
          </code>
          In the case of multiple conditions only the first logical condition
          which evaluates to true will be executed. To execute multiple
          statements, group them within a block statement ({ ... }) . In
          general, it's good practice to always use block statements, especially
          when nesting if statements:

          <code
            >if (condition) { statement_1_runs_if_condition_is_true;
            statement_2_runs_if_condition_is_true; } else {
            statement_3_runs_if_condition_is_false;
            statement_4_runs_if_condition_is_false; }</code
          >
          It is advisable to not use simple assignments in a conditional
          expression, because the assignment can be confused with equality when
          glancing over the code. For example, do not use the following code:
          <code>if (x = y) { /* statements here */ }</code> If you need to use
          an assignment in a conditional expression, a common practice is to put
          additional parentheses around the assignment. For example:

          <code>if ((x = y)) { /* statements here */ }</code>
        </article>
      </section>
      <section class="main-section" id="while_statement">
        <header>while statement</header>
        <article>
          A while statement executes its statements as long as a specified
          condition evaluates to true. A while statement looks as follows:

          <code>while (condition) statement</code> If the condition becomes
          false, statement within the loop stops executing and control passes to
          the statement following the loop.

          <p>
            The condition test occurs before statement in the loop is executed.
            If the condition returns true, statement is executed and the
            condition is tested again. If the condition returns false, execution
            stops and control is passed to the statement following while.
          </p>

          <p>
            To execute multiple statements, use a block statement ({ ... }) to
            group those statements.
          </p>

          Example:

          <p>
            The following while loop iterates as long as n is less than three:
          </p>

          <code>var n = 0; var x = 0; while (n &lt; 3) { n++; x += n; }</code>
          <p>
            With each iteration, the loop increments n and adds that value to x.
            Therefore, x and n take on the following values:
          </p>

          <ul>
            <li>After the first pass: n = 1 and x = 1</li>
            <li>After the second pass: n = 2 and x = 3</li>
            <li>After the third pass: n = 3 and x = 6</li>
          </ul>
          <p>
            After completing the third pass, the condition n &lt; 3 is no longer
            true, so the loop terminates.
          </p>
        </article>
      </section>
      <section class="main-section" id="Function_declarations">
        <header>Function declarations</header>
        <article>
          A function definition (also called a function declaration, or function
          statement) consists of the function keyword, followed by:

          <ul>
            <li>The name of the function.</li>
            <li>
              A list of arguments to the function, enclosed in parentheses and
              separated by commas.
            </li>
            <li>
              The JavaScript statements that define the function, enclosed in
              curly brackets, { }.
            </li>
          </ul>
          <p>
            For example, the following code defines a simple function named
            square:
          </p>

          <code>function square(number) { return number * number; }</code>
          <p>
            The function square takes one argument, called number. The function
            consists of one statement that says to return the argument of the
            function (that is, number) multiplied by itself. The return
            statement specifies the value returned by the function.
          </p>
          <code>return number * number;</code>
          <p>
            Primitive parameters (such as a number) are passed to functions by
            value; the value is passed to the function, but if the function
            changes the value of the parameter, this change is not reflected
            globally or in the calling function.
          </p>
        </article>
      </section>
      <section class="main-section" id="Reference">
        <header>Reference</header>
        <article>
          <ul>
            <li>
              All the documentation in this page is taken from
              <a
                href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide"
                target="_blank"
                >MDN</a
              >
            </li>
          </ul>
        </article>
      </section>
    </main>
</body>
</html>