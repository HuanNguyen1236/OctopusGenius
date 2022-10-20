import 'package:flutter/material.dart';
import 'package:octopusgenius/create_account2.dart';

class create_account1 extends StatefulWidget {
  const create_account1({super.key});
  @override
  State<StatefulWidget> createState() {
    return create_account1state();
  }
}

class create_account1state extends State {
  @override
  Widget build(BuildContext context) {
    Widget register1 = Container(
      padding: EdgeInsets.only(top: 60),
      child: Column(
        children: [
          Container(
            width: 350,
            padding: const EdgeInsets.all(1),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.mail,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Email',
              ),
            ),
          ),
          Container(
            width: 350,
            padding: const EdgeInsets.all(0),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.phone_in_talk,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Phone number',
              ),
            ),
          ),
          Container(
            width: 350,
            padding: const EdgeInsets.all(0),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.location_on,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Address',
              ),
            ),
          ),
          Container(
            width: 350,
            padding: const EdgeInsets.all(0),
            child: const TextField(
              decoration: InputDecoration(
                prefixIcon: Icon(
                  Icons.calendar_month,
                  color: Color.fromARGB(255, 40, 3, 105),
                ),
                labelText: 'Birthday',
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
                    builder: (context) => create_account2(),
                  ),
                );
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
          height: double.infinity,
          decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("images/account.png"),
            ),
          ),
          child: Padding(
            padding: EdgeInsets.only(top: 150),
            child: ListView(
              children: [
                register1,
                button,
              ],
            ),
          ),
        ),
      ),
    );
  }
}
