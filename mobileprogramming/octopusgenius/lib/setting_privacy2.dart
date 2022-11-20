import 'package:flutter/material.dart';
import 'package:octopusgenius/home.dart';

class setting_privacy2 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return setting_privacy2state();
  }
}

class setting_privacy2state extends State {
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/account.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        appBar: PreferredSize(
          child: Opacity(
            opacity: 0.5,
            child: AppBar(
              title: const Text(
                "Setting privacy",
                style: TextStyle(
                  fontSize: 25,
                ),
              ),
              actions: <Widget>[],
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.only(
                  bottomRight: Radius.circular(40),
                ),
              ),
            ),
          ),
          preferredSize: Size.fromHeight(80),
        ),
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              SingleChildScrollView(
                child: Container(
                  padding: EdgeInsets.only(
                    top: MediaQuery.of(context).size.height * 0.2,
                  ),
                  child: Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.only(bottom: 30, right: 170),
                        child: Text(
                          'Setting privacy',
                          style: TextStyle(
                            fontSize: 30,
                            fontWeight: FontWeight.bold,
                            color: Color.fromARGB(255, 40, 3, 150),
                          ),
                        ),
                      ),
                      Container(
                        width: 350,
                        child: Column(
                          children: [
                            TextField(
                              obscureText: true,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Confirmation Code',
                                prefixIcon: Icon(
                                  Icons.lock_outlined,
                                  color: Color.fromARGB(255, 40, 3, 150),
                                ),
                                border: OutlineInputBorder(
                                  borderRadius: BorderRadius.circular(10),
                                ),
                              ),
                            ),
                          ],
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.only(top: 30),
                        child: Container(
                          width: 300,
                          height: 50,
                          child: MaterialButton(
                            color: Color.fromARGB(255, 255, 255, 255),
                            onPressed: () {
                              Navigator.push(
                                context,
                                MaterialPageRoute(
                                  builder: (context) => home(),
                                ),
                              );
                            },
                            child: Text(
                              'Finish',
                              style: TextStyle(
                                color: Color.fromARGB(255, 40, 3, 150),
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
                      ),
                    ],
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
