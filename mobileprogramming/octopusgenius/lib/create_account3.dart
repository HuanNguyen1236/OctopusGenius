import 'package:flutter/material.dart';

class create_account3 extends StatefulWidget {
  const create_account3({super.key});
  @override
  State<StatefulWidget> createState() {
    return create_account3state();
  }
}

class create_account3state extends State {
  @override
  Widget build(BuildContext context) {
    Widget register3 = Container(
      padding: EdgeInsets.all(40),
      child: Column(
        children: [
          Container(
            width: 350,
            padding: const EdgeInsets.all(1),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.lock,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Confirmation code',
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
              onPressed: () {},
              color: Colors.white,
              child: Text(
                "Finish",
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
      debugShowCheckedModeBanner: true,
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
            padding: EdgeInsets.only(top: 350),
            child: Column(
              children: [
                register3,
                button,
              ],
            ),
          ),
        ),
      ),
    );
  }
}
