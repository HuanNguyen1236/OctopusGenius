import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:octopusgenius/create_account1.dart';
import 'package:octopusgenius/forgot_password_1.dart';
import 'package:octopusgenius/home.dart';

void main() => runApp(octopusgeniusapp());

class octopusgeniusapp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(body: octopusgeniushome()),
    );
  }
}

class octopusgeniushome extends StatefulWidget {
  const octopusgeniushome({super.key});
  @override
  State<StatefulWidget> createState() {
    return octopusgeniusstate();
  }
}

class octopusgeniusstate extends State {
  @override
  Widget build(BuildContext context) {
    Widget background = Container(
      decoration: BoxDecoration(
        image: DecorationImage(
            image: AssetImage('images/signin.png'), fit: BoxFit.cover),
      ),
    );
    Widget username_passwork = Container(
      padding: EdgeInsets.only(left: 20, right: 20),
      child: Center(
        child: Column(
          children: [
            TextField(
              decoration: InputDecoration(
                labelText: 'Username',
                prefixIcon: Icon(
                  Icons.person,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
              ),
            ),
            TextField(
              obscureText: true,
              decoration: InputDecoration(
                labelText: 'Password',
                prefixIcon: Icon(
                  Icons.key_off_outlined,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
              ),
            ),
          ],
        ),
      ),
    );
    Widget signin_signup = Container(
      padding: EdgeInsets.all(5),
      child: Column(
        children: [
          Container(
            width: 300,
            height: 60,
            child: MaterialButton(
              splashColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => home(),
                  ),
                );
              },
              color: Color.fromARGB(255, 95, 44, 183),
              child: Text(
                "Sign In",
                style: TextStyle(color: Colors.white, fontSize: 20),
              ),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(
                  30.0,
                ),
              ),
            ),
          ),
          Container(
            padding: EdgeInsets.only(top: 10),
            width: 300,
            height: 65,
            child: MaterialButton(
              splashColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => create_account1(),
                  ),
                );
              },
              color: Colors.white,
              child: Text(
                "Sign Up",
                style: TextStyle(
                  color: Color.fromARGB(255, 40, 3, 105),
                  fontSize: 20,
                ),
              ),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(
                  30.0,
                ),
              ),
            ),
          ),
        ],
      ),
    );
    Widget forgotpassword = Container(
      width: 300,
      height: 50,
      child: TextButton(
        onPressed: () {
          Navigator.push(
            context,
            MaterialPageRoute(
              builder: (context) => forgot_password_1(),
            ),
          );
        },
        child: Text("Forgot password"),
      ),
    );
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        backgroundColor: Colors.transparent,
        body: Stack(
          children: [
            Container(
              child: Stack(
                children: [
                  background,
                  Container(
                    padding: EdgeInsets.only(top: 330),
                    child: Align(
                      alignment: AlignmentDirectional.topEnd,
                      child: Container(
                        child: ListView(
                          children: [
                            username_passwork,
                            signin_signup,
                            forgotpassword,
                          ],
                        ),
                      ),
                    ),
                  )
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
