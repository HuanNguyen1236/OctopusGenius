import 'package:flutter/material.dart';
import 'package:octopusgenius/create_account3.dart';

class create_account2 extends StatefulWidget {
  const create_account2({super.key});
  @override
  State<StatefulWidget> createState() {
    return create_account2state();
  }
}

class create_account2state extends State {
  @override
  Widget build(BuildContext context) {
    Widget register2 = Container(
      padding: EdgeInsets.only(top: 80),
      child: Column(
        children: [
          Container(
            width: 350,
            padding: const EdgeInsets.all(1),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.person,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Username',
              ),
            ),
          ),
          Container(
            width: 350,
            padding: const EdgeInsets.all(0),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.key,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Password',
              ),
            ),
          ),
          Container(
            width: 350,
            padding: const EdgeInsets.all(0),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.key,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Confirm password',
              ),
            ),
          ),
        ],
      ),
    );

    Widget button = Container(
      padding: EdgeInsets.only(top: 10),
      child: Column(
        children: [
          Container(
            width: 300,
            height: 60,
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
                      builder: (context) => create_account3(),
                    ));
              },
              color: Colors.white,
              child: Text(
                "Next",
                style: TextStyle(
                  color: Color.fromARGB(255, 40, 3, 105),
                  fontSize: 20,
                  fontWeight: FontWeight.bold,
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
          height: double.maxFinite,
          decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("images/account.png"),
            ),
          ),
          child: Padding(
            padding: EdgeInsets.only(top: 200),
            child: ListView(
              children: [
                register2,
                button,
              ],
            ),
          ),
        ),
      ),
    );
  }
}
