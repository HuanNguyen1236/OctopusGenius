import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/event.dart';
import 'package:octopusgenius/game.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/level.dart';
import 'package:octopusgenius/profile1.dart';
import 'package:octopusgenius/profile2.dart';

class Event2 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return Event2state();
  }
}

class Event2state extends State {
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/background.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        appBar: PreferredSize(
          child: AppBar(
            title: const Text(
              "Username",
              style: TextStyle(
                fontSize: 25,
              ),
            ),
            actions: <Widget>[],
            backgroundColor: Color.fromARGB(255, 40, 3, 105),
            leading: Container(
              width: 70,
              child: CircleAvatar(
                child: IconButton(
                  padding: EdgeInsets.only(right: 0),
                  onPressed: () {
                    Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (context) => profile2(),
                      ),
                    );
                  },
                  icon: Icon(Icons.person),
                ),
              ),
            ),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.only(
                bottomRight: Radius.circular(40),
              ),
            ),
          ),
          preferredSize: Size.fromHeight(80),
        ),
        backgroundColor: Colors.transparent,
        body: Column(
          mainAxisAlignment: MainAxisAlignment.spaceBetween,
          children: [
            Container(
              child: Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Row(
                    children: [
                      Image(
                        image: AssetImage('icons/star.png'),
                        width: 40,
                      ),
                      Text(
                        "99999",
                        style: TextStyle(
                            fontSize: 15, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                  SizedBox(
                    width: 50,
                  ),
                  Row(
                    children: [
                      Image(
                        image: AssetImage('icons/crab.png'),
                        width: 45,
                      ),
                      Text(
                        "99999",
                        style: TextStyle(
                            fontSize: 15, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Column(
              children: [
                Opacity(
                  opacity: 0.98,
                  child: ClipRRect(
                    child: Container(
                      width: double.infinity,
                      height: 350,
                      color: Colors.yellow,
                      child: Column(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Container(
                            height: 70,
                            width: double.infinity,
                            color: Color.fromARGB(255, 40, 3, 105),
                            child: Center(
                              child: Text(
                                'Name Event',
                                style: TextStyle(
                                  fontSize: 30,
                                  color: Colors.yellow,
                                  fontWeight: FontWeight.bold,
                                ),
                              ),
                            ),
                          ),
                          Container(
                            child: Center(
                              child: Padding(
                                padding: const EdgeInsets.all(15),
                                child: Text(
                                  'Content Event',
                                  style: TextStyle(
                                    fontSize: 23,
                                    color: Color.fromARGB(255, 40, 3, 105),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          Container(
                            child: Padding(
                              padding: EdgeInsets.only(bottom: 50),
                              child: Container(
                                child: Row(
                                  mainAxisAlignment: MainAxisAlignment.end,
                                  children: [
                                    ClipRRect(
                                      child: Container(
                                        width: 200,
                                        height: 70,
                                        color: Colors.white,
                                        child: MaterialButton(
                                          onPressed: () {
                                            Navigator.push(
                                              context,
                                              MaterialPageRoute(
                                                builder: (context) => game(),
                                              ),
                                            );
                                          },
                                          child: Text(
                                            'Play Event',
                                            style: TextStyle(
                                              color: Color.fromARGB(
                                                  255, 40, 3, 105),
                                              fontSize: 20,
                                              fontWeight: FontWeight.bold,
                                            ),
                                          ),
                                        ),
                                      ),
                                      borderRadius: BorderRadius.circular(50),
                                    ),
                                  ],
                                ),
                              ),
                            ),
                          ),
                        ],
                      ),
                    ),
                    borderRadius: BorderRadius.only(
                      topLeft: Radius.circular(50),
                    ),
                  ),
                ),
              ],
            ),
          ],
        ),
        floatingActionButton: Container(
          width: 70,
          child: SizedBox(
            height: 100,
            child: FloatingActionButton(
              child: Icon(
                Icons.home,
                size: 40,
              ),
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => home(),
                  ),
                );
              },
            ),
          ),
        ),
        floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
        bottomNavigationBar: BottomAppBar(
          shape: CircularNotchedRectangle(),
          child: Container(
            height: 70,
          ),
        ),
      ),
    );
  }
}
