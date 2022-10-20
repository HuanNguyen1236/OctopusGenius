import 'package:flutter/material.dart';
import 'package:octopusgenius/forgot_password_3.dart';

class forgot_password_2 extends StatefulWidget {
  const forgot_password_2({super.key});
  @override
  State<StatefulWidget> createState() {
    return forgot_password_2state();
  }
}

class forgot_password_2state extends State {
  @override
  Widget build(BuildContext context) {
    Widget textSection = Container(
      alignment: Alignment.centerLeft,
      margin: EdgeInsets.all(10),
      child: Text(
        'Forgot password',
        style: TextStyle(
          fontSize: 25,
          color: Color.fromARGB(255, 40, 3, 105),
        ),
      ),
    );
    Widget passwordSection = Container(
      padding: EdgeInsets.all(40),
      child: Column(
        children: [
          Container(
            padding: const EdgeInsets.all(1),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.key_off_outlined,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Password',
              ),
            ),
          ),
          Container(
            padding: const EdgeInsets.all(1),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.key_outlined,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Comfirmation password',
              ),
            ),
          ),
        ],
      ),
    );
    Widget nextSection = Container(
      padding: EdgeInsets.only(top: 10),
      child: Column(
        children: [
          Container(
            padding: EdgeInsets.only(top: 10),
            child: MaterialButton(
              splashColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => forgot_password_3(),
                  ),
                );
              },
              color: Colors.white,
              child: Text(
                "Next",
                style: TextStyle(
                  color: Color.fromARGB(255, 40, 3, 105),
                  fontSize: 25,
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
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: Container(
          width: double.infinity,
          height: double.infinity,
          decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("images/account.png"),
            ),
          ),
          child: Padding(
            padding: EdgeInsets.only(top: 300),
            child: Column(
              children: [
                textSection,
                passwordSection,
                nextSection,
              ],
            ),
          ),
        ),
      ),
    );
  }
}
