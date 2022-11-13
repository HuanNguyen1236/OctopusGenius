import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/field.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/profile1.dart';
import 'package:octopusgenius/profile2.dart';

class level extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return levelstate();
  }
}

class levelstate extends State {
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
              crossAxisAlignment: CrossAxisAlignment.end,
              children: [
                Opacity(
                  opacity: 0.98,
                  child: ClipRRect(
                    child: Container(
                      width: 200,
                      height: 80,
                      color: Color.fromARGB(255, 42, 2, 111),
                      child: MaterialButton(
                        onPressed: () {
                          Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => field(),
                            ),
                          );
                        },
                        child: Text(
                          'Difficult',
                          style: TextStyle(
                            color: Colors.white,
                            fontSize: 30,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.only(
                      topLeft: Radius.circular(100),
                    ),
                  ),
                ),
                Opacity(
                  opacity: 0.98,
                  child: ClipRRect(
                    child: Container(
                      width: 300,
                      height: 100,
                      color: Color.fromARGB(255, 70, 20, 156),
                      child: MaterialButton(
                        onPressed: () {
                          Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => field(),
                            ),
                          );
                        },
                        child: Text(
                          'Medium',
                          style: TextStyle(
                            color: Colors.white,
                            fontSize: 30,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.only(
                      topLeft: Radius.circular(100),
                    ),
                  ),
                ),
                Opacity(
                  opacity: 0.98,
                  child: ClipRRect(
                    child: Container(
                      width: double.infinity,
                      height: 170,
                      color: Color.fromARGB(255, 82, 25, 180),
                      child: MaterialButton(
                        onPressed: () {
                          Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => field(),
                            ),
                          );
                        },
                        child: Text(
                          'Easy',
                          style: TextStyle(
                            color: Colors.white,
                            fontSize: 46,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.only(
                      topLeft: Radius.circular(100),
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
